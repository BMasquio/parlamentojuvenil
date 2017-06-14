<?php

namespace App\Data\Repositories;

use DB;
use App\Data\Entities\User;
use App\Data\Entities\Vote;
use App\Data\Entities\Student;
use App\Data\Entities\SocialUser;
use App\Data\Entities\Subscription;

class Subscriptions extends Repository
{
    public function candidates($year = null, $round = null)
    {
        $query = Subscription::query();

        $query->select(
            'users.name as user_name',
            'users.avatar as user_avatar',
            DB::raw("'/templates/{$year}/images/no-avatar.svg' as no_avatar"),
            'users.email as user_email',
            'students.name as student_name',
            'students.city as student_city',
            'students.regional as student_regional',
            'students.school as student_school',
            'subscriptions.id as subscription_id'
        );

        $query->where('ignored', false);

        $query->where('year', $this->getCurrentYear($year));

        $query->join('social_users', 'social_users.student_id', '=', 'subscriptions.student_id');

        $query->join('users', 'social_users.user_id', '=', 'users.id');

        if ($this->getCurrentRound($round) == 2) {
            $query->where('elected_1nd', true);
        }

        return $query;
    }

    public function candidatesForSchool($year = null, $round = null, $query = null)
    {
        return $this
                ->makeCandidatesQuery($year, $round, $query)
                ->where('students.school', loggedUser()->student->school)
                ->get()
        ;
    }

    public function candidatesForCity($year = null, $round = null, $query = null)
    {
        $query = $this
                ->makeCandidatesQuery($year, $round, $query)
                ->where('students.city', loggedUser()->student->city)
        ;

        if (loggedUser()->student->city == 'RIO DE JANEIRO') {
            $query = $query->where('students.regional', loggedUser()->student->regional);
        }

        return $query->get();
    }

    public function candidatesFirstRound($year = null)
    {
        return $this->candidates($year, 1);
    }

    public function candidatesSecondRound($year = null)
    {
        return $this->candidates($year, 2);
    }

    public function checkIfUserCanVote()
    {
        $vote = Vote::where('year', $this->getCurrentYear())
                    ->where('student_id', loggedUser()->student->id)
                    ->where('round', $this->getCurrentRound())
                    ->get()
        ;

        if ($vote->count() > 0) {
            throw new StudentAlreadyVoted();
        }
    }

    public function deleteMyVotes()
    {
        Vote::where('student_id', loggedUser()->student->id)->delete();

        dd('votes deleted.');
    }

    /**
     * @param $vote
     * @return mixed
     */
    public function findBySubscriptionId($vote)
    {
        return Subscription::with('student')->where('id', $vote)->first();
    }

    private function getAllVotes()
    {
        return DB::select(DB::raw(<<<SQL
            select
              votes.id vote_id,
              students.id student_id,
              students.name,
              students.city,
              students.school,
              students.registration,
              students.birthdate,
              students.email,
              votes.is_valid
            from students
            join votes on votes.student_id = students.id
            and votes.YEAR = 2017
            order by students.registration, students.birthdate, votes.created_at
            ;
SQL
        ));
    }

    public function getCandidateBySubscription($subscription_id)
    {
        return $this->getCandidates(
            $this->candidates()->where('subscriptions.id', $subscription_id)
        )->first();
    }

    public function getElected($round)
    {
        $this->markAllElected();

        $electedField = 'elected_'.$round.'nd';

        $elected = Subscription::with('student')
                ->join('students', 'students.id', '=', 'subscriptions.student_id')
                ->where('year', $this->getCurrentYear())
                ->where($electedField, true)
                ->orderBy('students.regional', 'asc')
                ->orderBy('students.city', 'asc')
                ->orderBy('students.name', 'asc')
                ->get()
                ->toArray()
        ;

        $counter = 0;
        $last = count($elected)-1;

        $counters = [];

        $counters['regionalLast'] = '';
        $counters['regionalCount'] = '';
        $counters['regionalFirst'] = -1;

        $counters['cityLast'] = '';
        $counters['cityCount'] = '';
        $counters['cityFirst'] = -1;

        while ($last > 0) {
            if ($counters['regionalLast'] != $elected[$counter]['regional']) {
                $this->updateCounters($elected, $counters, 'regional', $counter, 'regionalFirst', 'regionalLast', 'regionalCount');
            }

            if ($counters['cityLast'] != $elected[$counter]['city']) {
                $this->updateCounters($elected, $counters, 'city', $counter, 'cityFirst', 'cityLast', 'cityCount');
            }

            $counters['regionalCount']++;
            $counters['cityCount']++;

            $elected[$counter]['regionalCount'] = $counters['regionalCount'];
            $elected[$counter]['cityCount'] = $counters['cityCount'];

            $counter++;
            if ($counter > $last) {
                break;
            }
        }

        $this->updateCounters($elected, $counters, 'regional', -1, 'regionalFirst', 'regionalLast', 'regionalCount');
        $this->updateCounters($elected, $counters, 'city', -1, 'cityFirst', 'cityLast', 'cityCount');

        return $elected;
    }

    private function invalidateVote($vote_id)
    {
        if ($vote = Vote::find($vote_id)) {
            $vote->is_valid = false;

            $vote->save();
        }
    }

    private function removeInvalidVotes()
    {
        $previous = null;

        foreach ($this->getAllVotes() as $vote) {
            if ($vote->registration == $previous) {
                $this->invalidateVote($vote->vote_id);
            }

            $previous = $vote->registration;
        }
    }

    private function updateCounters(&$elected, &$counters, $field, $counter, $fieldFirst, $fieldLast, $fieldCount)
    {
        if ($counters[$fieldCount] > 1) {
            for ($x = $counters[$fieldFirst]; $x < $counters[$fieldFirst]+$counters[$fieldCount]; $x++) {
                if ($x == $counters[$fieldFirst]) {
                    $elected[$x][$fieldCount] = $counters[$fieldCount];
                } else {
                    $elected[$x][$fieldCount] = 0;
                }
            }
        }

        if ($counter >= 0 && isset($elected[$counter])) {
            $counters[$fieldLast] = $elected[$counter][$field];
            $counters[$fieldCount] = 0;
            $counters[$fieldFirst] = $counter;
        }
    }

    private function getMarker($vote, $votePer)
    {
        return
            $vote[$votePer] .
            ($votePer == 'city_name' && $vote['city_name'] == 'RIO DE JANEIRO' ? $vote['regional'] : '')
        ;
    }

    public function getVotesPerSubscription($subscription_id)
    {
        return Vote::select([
                    'students.name as student_name',
                    'students.school as student_school',
                    'students.city as student_city',
                    'students.regional as student_regional',
                    'students.registration as student_registration',
                    'students.birthdate as student_birthdate',
                ])
                ->join('students', 'students.id', '=', 'votes.student_id')
                ->orderBy('students.name')
                ->where('votes.subscription_id', $subscription_id)
                ->where('votes.round', $this->getCurrentRound())
                ->get();
    }

    private function makeCandidatesQuery($year, $round, $query = null)
    {
        if (is_null($query)) {
            $query = $this->candidates($year, $round);
        }

        return $query->join('students', 'students.id', '=', 'subscriptions.student_id');
    }

    public function markAllElected()
    {
        $this->removeInvalidVotes();

        $electedField = 'elected_'.$this->getCurrentRound().'nd';

        $round = $this->getCurrentRound();

        $query = Subscription::query();

        $query->select(
            'students.name as student_name',
            'students.city as city_name',
            'students.regional as student_regional',
            'subscriptions.id as subscription_id',
            'students.school as school_name',
            DB::raw(sprintf('(select count(*) from votes where is_valid = true and year = %s and round = %s and votes.subscription_id = subscriptions.id) as votes', $this->getCurrentYear(), $round))
        );

        $query->where('year', $this->getCurrentYear());

        $query->join('students', 'students.id', '=', 'subscriptions.student_id');

        if ($round == 1) {
            $query->orderBy('school_name', 'asc');

            $votePer = 'school_name';
        } else {
            $query->where('elected_1nd', true);

            $query->orderBy('city_name', 'asc');

            $votePer = 'city_name';
        }

        $query->orderBy('votes', 'desc');

        $votes = $query->get();

        DB::transaction(function () use ($votes, $electedField, $votePer) {
            $currentMarker = '';
            $markerCount = 0;
            $lastSubscriptionForMarker = null;

            Subscription::where('year', $this->getCurrentYear())->update([$electedField => false]);

            foreach ($votes as $vote) {
                if ($currentMarker !== $this->getMarker($vote, $votePer)) {
                    if ($markerCount == 1 && ! is_null($lastSubscriptionForMarker)) {
                        $this->markAsElected($lastSubscriptionForMarker, $electedField);
                    }

                    $currentMarker = $this->getMarker($vote, $votePer);

                    $markerCount = 0;

                    $lastSubscriptionForMarker = $vote['subscription_id'];

                    $neededVotes = $vote['votes']; /// this is the max votes of this school
                }

                if ($vote['votes'] == $neededVotes && $neededVotes > 0) {
                    $this->markAsElected($vote['subscription_id'], $electedField);
                }

                $markerCount++;
            }
        });
    }

    /**
     * @param $vote
     * @param $electedField
     */
    function markAsElected($subscriptionId, $electedField)
    {
        $subscription = $this->findBySubscriptionId($subscriptionId);

        $subscription->{$electedField} = true;

        $subscription->save();
    }

    public function getCandidates($query = null, $year = null)
    {
        $method = $this->getCurrentRound() == 1
                    ? 'candidatesForSchool'
                    : 'candidatesForCity'
        ;

        return $this->{$method}($this->getCurrentYear($year), $this->getCurrentRound(), $query);
    }

    public function voteIn($subscription_id)
    {
        $this->checkIfUserCanVote();

        Vote::create([
            'student_id' => loggedUser()->student->id,
            'subscription_id' => $subscription_id,
            'round' => $this->getCurrentRound(),
            'year' => $this->getCurrentYear(),
        ]);
    }

    public function getElectedOn1and2($year = null)
    {
        $this->markAllElected();

        $year = $this->getCurrentYear($year);

        $values = Subscription::with('quizResult')
                    ->select(
                      DB::raw("(select count(city) from students join subscriptions on subscriptions.student_id = students.id where subscriptions.elected_1nd = true and year = '$year') as cities_1nd"),
                      DB::raw("(select count(city) from students join subscriptions on subscriptions.student_id = students.id where subscriptions.elected_2nd = true and year = '$year') as cities_2nd"),
                      DB::raw("(select count(*) from votes where votes.round = 1 and votes.year = '$year') as votes_1nd"),
                      DB::raw("(select count(*) from votes where votes.round = 2 and votes.year = '$year') as votes_2nd"),
                      DB::raw("(select count(*) from seeduc) as total_voters")
                    )
                    ->first()
        ;

        $total_cities_1nd = $values['cities_1nd'];
        $total_cities_2nd = $values['cities_2nd'];
        $total_valid_votes_1nd = $values['votes_1nd'];
        $total_valid_votes_2nd = $values['votes_2nd'];
        $total_voters = $values['total_voters'];
        $voter_percentage_1nd = round(($total_valid_votes_1nd / $total_voters) * 100, 5) . '%';
        $voter_percentage_2nd = round(($total_valid_votes_2nd / $total_voters) * 100, 5) . '%';

        $data = Subscription::with('quizResult')
                ->select(
                    'subscriptions.id as subscription_id',
                    'students.name',
                    'students.city',
                    'students.birthdate',
                    'students.registration',
                    'subscriptions.elected_1nd',
                    DB::raw("(select count(*) from votes where votes.subscription_id = subscriptions.id and votes.round = 1 and votes.year = $year) as votes_1nd"),
                    'subscriptions.elected_2nd',
                    DB::raw("(select count(*) from votes where votes.subscription_id = subscriptions.id and votes.round = 2 and votes.year = $year) as votes_2nd")
                )
                ->join('students', 'students.id', '=' , 'subscriptions.student_id')
                ->where(function ($query) {
                    $query->where('elected_1nd', true);
                })
                ->orderBy('votes_2nd', 'desc')
                ->get()
        ;

        return [
            'year' => $year,
            'elected' => $data,
            'total_cities_1nd' => $total_cities_1nd,
            'total_cities_2nd' => $total_cities_2nd,
            'total_valid_votes_1nd' => $total_valid_votes_1nd,
            'total_valid_votes_2nd' => $total_valid_votes_2nd,
            'total_voters' => $total_voters,
            'voter_percentage_1nd' => $voter_percentage_1nd,
            'voter_percentage_2nd' => $voter_percentage_2nd
        ];
    }

    public function getCitiesInCurrentRound()
    {
        $query = Subscription::select('students.city')
                ->join('students', 'students.id', '=', 'subscriptions.student_id')
                ->where('subscriptions.year', $this->getCurrentYear())
                ->where('subscriptions.ignored', false)
                ->where('subscriptions.year', $this->getCurrentYear())
                ->groupBy('students.city')
        ;

        if ($this->getCurrentRound() == 2) {
            $query->where('subscriptions.elected_1nd', true);
        }

        return $query->get();
    }

    public function removeSocialAccount()
    {
        SocialUser::where('user_id', loggedUser()->user->id)->delete();

        User::where('id', loggedUser()->user->id)->delete();

        logout();
    }

    public function fillRegional()
    {
        $students = DB::select(DB::raw(<<<STRING
select
  students.id,
  students.city,
  students.school,
  students.regional student_regional,
  (select regional from seeduc where seeduc.escola = students.school limit 1) as seeduc_regional
 from students
where students.regional is null or students.regional = ''
;
STRING
        ));

        foreach ($students as $student) {
            if (! is_null($student->seeduc_regional) && ! empty($student->seeduc_regional)) {
                $found = Student::find($student->id);
                $found->regional = $student->seeduc_regional;
                $found->save();
            }
        }
    }
}
