<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Data;
use \DB;
use Event;
use Input;
use Storage;
use Session;
use App\Data\Models\Training as TrainingModel;
use App\Http\Controllers\Controller as BaseController;
use App\Data\Repositories\Training as TrainingRepository;

class Training extends BaseController
{
    protected $trainingRepository;

    protected $user;

    public function __construct(
        Data $dataRepository,
        TrainingRepository $trainingRepository
    ) {
        parent::__construct($dataRepository);

        $this->trainingRepository = $trainingRepository;

        if (loggedUser() && loggedUser()->subscription) {
            $this->user = $user = loggedUser()->subscription;
        }
    }

    public function index()
    {
        return redirect()->route('training.content');
    }

    public function content()
    {
        $training = $this->trainingRepository->addTrainingData(
            loggedUser()->subscription,
            TrainingModel::byYear($this->getYear())
        );

        return view($this->getYear() . '.training.content')
            ->with('loggedUser', loggedUser()->subscription)
            ->with('training', $training);
    }

    public function video()
    {
        return view($this->getYear() . '.training.video');
    }

    public function watch($item)
    {
        $this->trainingRepository->markAsWatched($item);

        $training = $this->trainingRepository->findById(
            $item,
            loggedUser()->subscription,
            $this->getYear()
        );

        $view = $this->getYear() . '.training.' . $training['type'];

        if (
            $training['type'] == 'quiz' &&
            $this->trainingRepository->quizDone(
                get_current_year(),
                loggedUser()->subscription,
                $item
            )
        ) {
            return redirect()->route('quiz.result', [
                'year' => get_current_year(),
                'id' => $item,
            ]);
        }

        return view($view)
            ->with('loggedUser', loggedUser()->subscription)
            ->with('itemId', $item)
            ->with('lesson', $training);
    }
}
