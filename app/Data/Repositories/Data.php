<?php

namespace App\Data\Repositories;

use App\Models\School;
use App\Models\Clipping;
use App\Models\Student;
use App\Models\Timeline;
use App\Services\Views\Builder;
use Jenssegers\Date\Date as Carbon;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;
use App\Exceptions\AlreadySubscribed;
use App\Services\News\Service as SyncNewsService;
use App\Services\Filesystem\Service as Filesystem;
use Illuminate\Support\Collection as IlluminateCollection;

class Data extends Repository
{
    protected $usersRepository;
    /**
     * @var SyncNewsService
     */
    protected $syncNewsService;

    public $timeline;

    /**
     * @var Builder
     */
    public $viewBuilder;
    /**
     * @var Filesystem
     */
    protected $filesystem;

    /**
     * @var FlagContest
     */
    public $flagContest;

    public function __construct(
        SyncNewsService $syncNewsService,
        Builder $viewBuilder,
        Filesystem $filesystem,
        FlagContest $flagContest
    ) {
        $this->syncNewsService = $syncNewsService;

        $this->viewBuilder = $viewBuilder;
        $this->viewBuilder->setDataRepository($this);

        $this->filesystem = $filesystem;

        $this->flagContest = $flagContest;
    }

    /**
     * @param $student
     * @return mixed
     */
    protected function findSubscription($student)
    {
        return Subscription::findByStudent($student);
    }

    public function getCongressmen($year)
    {
        $year = $this->getYearString($year);

        $congressmen = $this->filesystem->congressmenLinks(
            env('PHOTOS_DIR') . DIRECTORY_SEPARATOR . $year
        );

        return $congressmen;
    }

    /**
     * @param null $year
     * @return mixed
     */
    public function getCurrentYear($year = null)
    {
        return get_current_year($year);
    }

    /**
     * @param $year
     * @return string
     */
    protected function getYearString($year)
    {
        if ($year == 2013) {
            $year = '7a edicao (2013)';
        } elseif ($year == 2014) {
            $year = '8a edicao (2014)';
        } elseif ($year == 2015) {
            $year = '9a edicao (2015)';
        } elseif ($year == 2016) {
            $year = '10a edicao (2016)';
        }

        return $year;
    }

    protected function makeSubscriptionData($input, $fillable, $prefilled)
    {
        $data = collect($input->only($fillable))
            ->except($prefilled)
            ->toArray();

        return $data;
    }

    public function sendSubscriptionCreatedMail($subscription)
    {
        $school = School::where('name', $subscription->school)->first();

        $data = [
            'school_name' => $school->name,
            'school_email' => $school->email,
            'name' => $subscription->name,
            'registration' => $subscription->registration,
            'grade' => $subscription->grade,
            'birthdate' => $subscription->birthdate,
            'cpf' => $subscription->cpf,
            'phone_home' => $subscription->phone_home,
            'phone_cellular' => $subscription->phone_cellular,
            'email' => $subscription->email,
            'address' => $subscription->address,
            'address_complement' => $subscription->address_complement,
            'address_neighborhood' => $subscription->address_neighborhood,
            'city' => $subscription->city,
        ];

        if (!$school) {
            return false;
        }
        if (!blank($data['school_email'])) {
            Mail::send('emails.new-subscription', ['data' => $data], function (
                $m
            ) use ($data) {
                $subject = 'Inscrição no Parlamento Juvenil: ' . $data['name'];

                $m->subject($subject);

                $m->to($data['school_email'], $data['school_name']);

                //            $m->to('PJALERJ@GMAIL.COM', 'Parlamento Juvenil');

                //            $m->to('acr@antoniocarlosribeiro.com', 'Antonio Carlos Ribeiro');

                //            $m->to('afaria@alerj.rj.gov.br', 'Antonio Carlos Ribeiro (Alerj)');
            });
        }
    }

    public function getTimeline($year)
    {
        $timeline = $this->makeTimelineData(Timeline::byYear($year));

        return new IlluminateCollection($timeline);
    }

    public function getClipping($year)
    {
        return new IlluminateCollection(Clipping::byYear($year));
    }

    public function createSubscription($input)
    {
        $student = Student::findOrFail($input['student_id']);

        $student->fill(
            $this->makeSubscriptionData(
                $input,
                $student->getFillable(),
                $student->getPrefilled()
            )
        );

        $student->save();

        if ($subscription = $this->findSubscription($student)) {
            throw new AlreadySubscribed();
        }

        $subscription = Subscription::firstOrCreate([
            'year' => $this->getCurrentYear(),
            'student_id' => $student->id,
        ]);

        return $subscription;
    }

    public function findByBirthdateAndRegistration($input)
    {
        return $this->usersRepository->findByBirthdateAndRegistration(
            $input->input('birthdate'),
            $input->input('registration')
        );
    }

    protected function makeTimelineData($timeline)
    {
        Carbon::setLocale('pt_BR');

        foreach ($timeline as $key => $item) {
            $now = Carbon::now();

            $start = Carbon::createFromFormat('Y-m-d H:i:s', $item['start']);
            $end = Carbon::createFromFormat('Y-m-d H:i:s', $item['end']);

            $startW3c = Carbon::createFromFormat(
                'Y-m-d H:i:s',
                $item['start']
            )->addSeconds(env('TIME_OFFSET_ADD'));
            $endW3c = Carbon::createFromFormat(
                'Y-m-d H:i:s',
                $item['end']
            )->addSeconds(env('TIME_OFFSET_ADD'));

            $timeline[$key]['startW3c'] = $startW3c->toW3cString();
            $timeline[$key]['endW3c'] = $endW3c->toW3cString();

            $end->addSeconds(2);

            $diff = $start->diffInDays($end);

            if ($diff <= 1) {
                $period = $start->format('d \\d\\e F');
            } else {
                if ($start->month == $end->month) {
                    $period =
                        $start->format('d') .
                        ' a ' .
                        $end->format('d \\d\\e F');
                } else {
                    $period =
                        $start->format('d \\d\\e F') .
                        ' a ' .
                        $end->format('d \\d\\e F');
                }
            }

            $timeline[$key]['period'] = $period;
            $timeline[$key]['past'] = $start->diffInSeconds($now) > 0;
        }

        return ['lines' => $timeline, 'now' => $now->toW3cString()];
    }
}
