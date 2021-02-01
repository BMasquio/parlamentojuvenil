<?php

namespace App\Http\Controllers;

use App\Data\Repositories\StudentAlreadyVotedOnFlag;
use Auth;
use App\Data\Repositories\Data;
use App\Data\Repositories\Subscriptions;
use App\Data\Repositories\FlagContest as FlagContestRepository;
use App\Http\Controllers\Controller as BaseController;

class FlagContest extends BaseController
{
    /**
     * @var Subscriptions
     */
    protected $flagContestRepository;

    public function __construct(
        Data $dataRepository,
        FlagContestRepository $flagContestRepository
    ) {
        parent::__construct($dataRepository);

        $this->dataRepository = $dataRepository;

        $this->flagContestRepository = $flagContestRepository;
    }

    public function subscribe()
    {
        if (
            !is_null(loggedUser()->student) &&
            $this->flagContestRepository->isStudentSubscribed(
                loggedUser()->student->id
            )
        ) {
            return view(get_current_year() . '.messages.show')->with(
                'message',
                'Você já está inscrito. Por favor entre em contato com o Parlamento Juvenil, caso tenha alguma dúvida.'
            );
        }

        return $this->buildView('flag-contest.subscribe');
    }

    public function post()
    {
        $model = $this->flagContestRepository->subscribe(request()->all());

        if (is_null($model->confirmed_at)) {
            return view(get_current_year() . '.messages.show')->with(
                'message',
                "Uma mensagem de confirmação da inscrição foi enviada para o endereço de e-mail '{$model->email}', por favor abra sua caixa postal clique no link de confirmação."
            );
        }

        return view(get_current_year() . '.messages.show')->with(
            'message',
            'A sua inscrição já foi confirmada. Por favor entre em contato com o Parlamento Juvenil, caso tenha alguma dúvida.'
        );
    }

    public function confirmEmail($confirmation_key, $email)
    {
        $model = $this->flagContestRepository->confirm(
            $confirmation_key,
            $email
        );

        if (!is_null($model->confirmed_at)) {
            return view(get_current_year() . '.messages.show')->with(
                'message',
                "Sua inscrição foi confirmada! Seu número de inscrição é <strong>{$model->id}</strong>."
            );
        }
    }

    public function vote()
    {
        return $this->buildView(
            'flag-contest.vote.index',
            null,
            null,
            true
        )->with('flags', $this->flagContestRepository->flags()->shuffle());
    }

    public function select($flag_id)
    {
        loggedUser()->selectedVotingFlagId = $flag_id;

        return redirect()->route('flag-contest.vote.confirm');
    }

    public function confirm()
    {
        $flag = $this->flagContestRepository->findById(
            loggedUser()->selectedVotingFlagId
        );

        return $this->buildView(
            'flag-contest.vote.confirm',
            null,
            null,
            true
        )->with('flag', $flag);
    }

    public function cast()
    {
        $voted = $this->flagContestRepository->cast(
            loggedUser()->student,
            loggedUser()->selectedVotingFlagId
        );

        $registration = loggedUser()->student->registration;

        logout();

        if (!$voted) {
            throw new StudentAlreadyVotedOnFlag($registration);
        }

        return view(get_current_year() . '.messages.show')->with(
            'message',
            'Parabéns! O seu voto foi registrado.'
        );
    }

    public function showVote($registration)
    {
        $vote = $this->flagContestRepository->getVoteByRegistration(
            $registration
        );

        if (is_null($vote)) {
            return view(get_current_year() . '.messages.show')->with(
                'message',
                'ERRO: Por favor entre em contato com o Parlamento Juvenil e repasse a mensagem de erro 701031-99 e sua matrícula.'
            );
        }

        return $this->buildView('flag-contest.vote.show', null, null, true)
            ->with('thumbnail_url', $vote->flag->thumbnail_url)
            ->with('image_url', $vote->flag->image_url)
            ->with('student_name', $vote->student->name)
            ->with('student_registration', $vote->student->registration)
            ->with('date_time', $vote->created_at);
    }
}
