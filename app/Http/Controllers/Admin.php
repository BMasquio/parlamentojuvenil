<?php

namespace App\Http\Controllers;

use \DB;
use App\Data\Entities\Vote;
use App\Data\Entities\Student;
use App\Data\Repositories\Subscriptions;
use App\Data\Entities\School;
use App\Data\Entities\Subscription;
use App\Http\Controllers\Controller as BaseController;
use App\Data\Repositories\Training as TrainingRepository;
use Illuminate\Database\Eloquent\Collection;

class Admin extends BaseController
{
    private $trainingRepository;

    /**
     * @var Subscriptions
     */
    private $subscriptionsRepository;

    public function __construct(TrainingRepository $trainingRepository, Subscriptions $subscriptionsRepository)
    {
        $this->trainingRepository = $trainingRepository;

        $this->subscriptionsRepository = $subscriptionsRepository;
    }

    private function extractId($id, $elements = 1)
    {
        $id = explode('.', $id);

        $count = count($id)  > 5 ? count($id)-4 : count($id)-3;

        $id = array_slice($id, -($count), ($count));

        return implode('.', $id);
    }

    function index()
	{
		return view('admin.index');
	}

	function city($city)
	{
		return view('admin.city')
				->with('city', $city)
				->with('subscriptions', Student::join('subscriptions', 'subscriptions.student_id', '=', 'students.id')->where('students.city', $city)->get())
				->with('schools', School::where('city', 'like', DB::raw("UPPER('".$city."')"))->get())
		;
	}

    function elected()
    {
        return view('admin.elected');
    }

    private function makeTitle($course)
    {
        $title = '';

        if (isset($course['title']) && $course['type'] == 'video')
        {
            $title = sprintf('Video (%s): ', $this->extractId($course['id'])) . $course['title'];
        }

        if (isset($course['title']) && $course['type'] == 'document')
        {
            $title = sprintf('Apostila (%s): ', $this->extractId($course['id'])) . $course['title'];
        }

        if (isset($course['question']))
        {
            $title = sprintf('Quiz (%s): ', $this->extractId($course['id'])) . $course['question'];
        }

        return $title;
    }

    function schools()
	{
		$schools = Subscription::join('students', 'students.id', '=', 'subscriptions.student_id')
                    ->select([
                        'students.school',
                        'students.city',
                        DB::raw('(select count(*) from subscriptions as su2 join students as st2 on st2.id = su2.student_id where st2.school = students.school) as schoolcount')
                    ])
                    ->orderBy('schoolcount', 'desc')
                    ->orderBy('students.city')
                    ->orderBy('students.school')
                    ->get();

		return view('admin.schools')
			->with('schools', $schools)
		;
	}

    function seeduc()
    {
        return view('admin.seeduc');
    }

    function users()
    {
        return view('admin.users');
    }

    public function training($id)
    {
        $year = 2016;

        $subscription = Subscription::with('watched')->find($id);

        foreach ($subscription->watched as $item) {
            if (! $course = $this->trainingRepository->findById($item->item_id, $subscription, $year))
            {
                continue;
            }

            if (isset($course['question'])) {
                $course['id'] = $item->item_id;
            }

            $title = $this->makeTitle($course);

            if (isset($course['type']) && $course['type'] == 'quiz') {
                if (isset($course['questions']))
                {
                    continue;
                }
            }

            $item->setAttribute('title', $title);
        }

        $watched = new Collection($subscription->watched->toArray());

        $watched = $watched->sortBy('title');

        return view('admin.training')->with('watched', $watched)->with('name', $subscription->name);
    }

    public function votesPerStudent($subscription_id)
    {
        return view('admin.votes')
                ->with('subscription', $this->subscriptionsRepository->findBySubscriptionId($subscription_id))
                ->with('votes', $this->subscriptionsRepository->getVotesPerSubscription($subscription_id))
        ;
    }

    public function voteStatitics()
    {
//        SELECT
//    to_timestamp(floor((extract('epoch' from created_at) / 3600 )) * 3600) AT TIME ZONE 'UTC' as hora,
//    (select count(*) from votes) as votos_total,
//    COUNT(*) votos_na_hora,
//    CAST(round((COUNT(*)  * 100.00) / (select count(*) from votes), 2) AS text) || '%' as percentual
//FROM votes
//GROUP BY hora
//ORDER BY hora desc
//    ;
    }
}
