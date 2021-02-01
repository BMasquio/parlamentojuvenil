<?php

namespace App\Http\Controllers;

use \DB;
use App\Models\School;
use App\Models\Student;
use App\Data\Repositories\Data;
use App\Models\Subscription;
use App\Data\Repositories\Subscriptions;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\Controller as BaseController;
use App\Data\Repositories\Training as TrainingRepository;

class Admin extends BaseController
{
    protected $trainingRepository;

    /**
     * @var Subscriptions
     */
    protected $subscriptionsRepository;

    public function __construct(
        Data $dataRepository,
        TrainingRepository $trainingRepository,
        Subscriptions $subscriptionsRepository
    ) {
        parent::__construct($dataRepository);

        $this->trainingRepository = $trainingRepository;

        $this->subscriptionsRepository = $subscriptionsRepository;
    }

    protected function extractId($id, $elements = 1)
    {
        $id = explode('.', $id);

        $count = count($id) > 5 ? count($id) - 4 : count($id) - 3;

        $id = array_slice($id, -$count, $count);

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
            ->with(
                'subscriptions',
                Student::join(
                    'subscriptions',
                    'subscriptions.student_id',
                    '=',
                    'students.id'
                )
                    ->where('subscriptions.year', get_current_year())
                    ->where('students.city', 'ilike', $city)
                    ->get()
            )
            ->with(
                'schools',
                School::where(
                    'city',
                    'like',
                    DB::raw("UPPER('" . $city . "')")
                )->get()
            );
    }

    function elected()
    {
        return view('admin.vote.index');
    }

    protected function makeTitle($course)
    {
        $title = '';

        if (isset($course['title']) && $course['type'] == 'video') {
            $title =
                sprintf('Video (%s): ', $this->extractId($course['id'])) .
                $course['title'];
        }

        if (isset($course['title']) && $course['type'] == 'document') {
            $title =
                sprintf('Apostila (%s): ', $this->extractId($course['id'])) .
                $course['title'];
        }

        if (isset($course['question'])) {
            $title =
                sprintf('Quiz (%s): ', $this->extractId($course['id'])) .
                $course['question'];
        }

        return $title;
    }

    function schools()
    {
        $year = get_current_year();

        $schools = Subscription::join(
            'students',
            'students.id',
            '=',
            'subscriptions.student_id'
        )
            ->select([
                'students.school',
                'students.city',
                DB::raw(
                    "(select count(*) from subscriptions as su2 join students as st2 on st2.id = su2.student_id where st2.school = students.school and su2.year = '{$year}') as schoolcount"
                ),
            ])
            ->orderBy('schoolcount', 'desc')
            ->orderBy('students.city')
            ->orderBy('students.school')
            ->get();

        return view('admin.schools')->with('schools', $schools);
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
        $year = get_current_year();

        $subscription = Subscription::with('watched')->find($id);

        foreach ($subscription->watched as $item) {
            if (
                !($course = $this->trainingRepository->findById(
                    $item->item_id,
                    $subscription,
                    $year
                ))
            ) {
                continue;
            }

            if (isset($course['question'])) {
                $course['id'] = $item->item_id;
            }

            $title = $this->makeTitle($course);

            if (isset($course['type']) && $course['type'] == 'quiz') {
                if (isset($course['questions'])) {
                    continue;
                }
            }

            $item->setAttribute('title', $title);

            $correct_answer = isset($course['correct'])
                ? $course['correct']
                : null;

            $item->setAttribute('correct_answer', $correct_answer);
        }

        $watched = new Collection($subscription->watched->toArray());

        $watched = $watched->sortBy('title');

        return view('admin.training')
            ->with('watched', $watched)
            ->with('name', $subscription->name);
    }

    public function votesPerStudent($subscription_id)
    {
        return view('admin.vote.student')
            ->with(
                'subscription',
                $this->subscriptionsRepository->findBySubscriptionId(
                    $subscription_id
                )
            )
            ->with(
                'votes',
                $this->subscriptionsRepository->getVotesPerSubscription(
                    $subscription_id
                )
            );
    }

    public function voteStatistics()
    {
        return view('admin.vote.statistics');
    }

    function contest()
    {
        return view('admin.contest');
    }

    function contestVotes()
    {
        $this->dataRepository->flagContest->markValidVotes();

        return view('admin.contest-votes');
    }
}
