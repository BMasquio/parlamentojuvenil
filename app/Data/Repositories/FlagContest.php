<?php

namespace App\Data\Repositories;

use DB;
use Mail;
use Carbon\Carbon;
use Rhumsaa\Uuid\Uuid;
use App\Models\Flag;
use App\Models\FlagVote;
use App\Models\FlagContest as FlagContestModel;

class FlagContest extends Repository
{
    public function allFlagsWithVotes()
    {
        return Flag::with('valid_votes')->get();
    }

    private function alreadyVoted($student)
    {
        return !is_null($this->findStudentVote($student));
    }

    protected function findByConfirmationAndEmail($confirmation_key, $email)
    {
        return FlagContestModel::where([
            'confirmation_key' => $confirmation_key,
            'email' => $email,
        ])->first();
    }

    protected function findByStudentId($student_id)
    {
        return FlagContestModel::where([
            'student_id' => $student_id,
            'year' => get_current_year(),
        ])->first();
    }

    protected function findOrCreate($data)
    {
        $model = FlagContestModel::where(
            array_only($data, ['student_id', 'year'])
        )->first();

        if (is_null($model)) {
            $model = FlagContestModel::create($data);
        }

        if (is_null($model->confirmed_at)) {
            $model->email = $data['email'];

            $model->save();

            $this->sendConfirmationEmail($model);
        }

        return $model;
    }

    /**
     * @param $student
     * @return mixed
     */
    private function findStudentVote($student)
    {
        return FlagVote::where('year', get_current_year())
            ->where(function ($query) use ($student) {
                $query->where('student_id', $student->id);
                $query->orWhere('registration', $student->registration);
            })
            ->first();
    }

    public function markValidVotes()
    {
        $previous = 'xx';

        FlagVote::orderBy('registration')
            ->orderBy('id')
            ->get()
            ->each(function ($vote) use (&$previous) {
                if ($vote->is_valid && $previous == $vote->registration) {
                    $vote->is_valid = false;
                    $vote->save();
                }

                $previous = $vote->registration;
            });
    }

    protected function sendConfirmationEmail($subscription)
    {
        Mail::send(
            'emails.flag-contest-email-confirmation',
            ['subscription' => $subscription],
            function ($message) use ($subscription) {
                $message
                    ->to($subscription->email, $subscription->student->name)
                    ->subject('Confirme seu endereço de e-mail');
            }
        );
    }

    protected function sendSubscriptionConfirmedEmail($subscription)
    {
        Mail::send(
            'emails.flag-contest-email-subscription-confirmation',
            ['subscription' => $subscription],
            function ($message) use ($subscription) {
                $message
                    ->to($subscription->email, $subscription->student->name)
                    ->subject(
                        'Seu número de inscrição no Concurso da Bandeira'
                    );
            }
        );
    }

    public function subscribe($input)
    {
        $data = [
            'student_id' => loggedUser()->student->id,

            'year' => get_current_year(),

            'confirmation_key' => (string) Uuid::uuid4(),

            'email' => $input['email'],
        ];

        $flag_contest = $this->findOrCreate($data);

        return $flag_contest;
    }

    public function confirm($confirmation_key, $email)
    {
        $model = $this->findByConfirmationAndEmail($confirmation_key, $email);

        if (!is_null($model)) {
            if (is_null($model->confirmed_at)) {
                $model->confirmed_at = Carbon::now();

                $model->save();

                $this->sendSubscriptionConfirmedEmail($model);
            }
        }

        return $model;
    }

    public function isStudentSubscribed($student_id)
    {
        $model = $this->findByStudentId($student_id);

        return !is_null($model) && !is_null($model->confirmed_at);
    }

    public function all()
    {
        return FlagContestModel::with('student')->get();
    }

    public function flags()
    {
        return Flag::where('year', $this->getCurrentYear())->get();
    }

    public function findById($id)
    {
        return Flag::find($id);
    }

    public function cast($student, $flag_id)
    {
        if ($this->alreadyVoted($student)) {
            return false;
        }

        FlagVote::create([
            'student_id' => $student->id,
            'flag_id' => $flag_id,
            'year' => get_current_year(),
            'registration' => $student->registration,
        ]);

        $this->markValidVotes();

        return true;
    }

    public function getVoteByRegistration($registration)
    {
        return FlagVote::where('year', get_current_year())
            ->where('registration', $registration)
            ->where('is_valid', true)
            ->first();
    }
}
