<?php

namespace App\Http\Controllers;

use App\Models\Watched;
use Illuminate\Database\Eloquent\Collection;

class Quiz extends Training
{
    protected function addUserAnswers($data)
    {
        $data['questions'] = collect($data['questions'])->map(function (
            $question,
            $index
        ) use ($data) {
            $question['user_answer'] = Watched::where(
                'year',
                get_current_year()
            )
                ->where('item_id', $data['id'] . '.' . $index)
                ->where('subscription_id', loggedUser()->subscription->id)
                ->first();

            if (!is_null($question['user_answer'])) {
                $question['user_answer'] = $question['user_answer']->answer;
            }

            return $question;
        });

        return collect($data);
    }

    public function index($id = null)
    {
        if (loggedUser()->subscription) {
            return $this->renderQuiz(
                loggedUser()->subscription,
                $id,
                $this->trainingRepository
            );
        }

        return redirect()->route('training.index');
    }

    protected function makeResult($id)
    {
        return new Collection(
            $this->trainingRepository->getResult(
                get_current_year(),
                $id,
                loggedUser()->subscription
            )
        );
    }

    protected function renderQuiz($subscription, $id, $repository)
    {
        if ($this->trainingRepository->quizDone($subscription, $id)) {
            return $this->result();
        }

        return view(get_current_year() . '.quiz.index')->with(
            'loggedUser',
            $subscription
        );
    }

    public function result($id)
    {
        $result = $this->makeResult($id);

        return view(get_current_year() . '.training.quiz-result')
            ->with(
                'correct',
                $correct = $result->where('correct', true)->count()
            )
            ->with('total', $total = $result->count())
            ->with('percent', $total > 0 ? ($correct / $total) * 100 : 0);
    }

    public function questions($itemId)
    {
        $data = $this->trainingRepository->findById(
            $itemId,
            loggedUser()->subscription,
            get_current_year()
        );

        return $this->addUserAnswers($data)->toJson();
    }

    public function answer($itemId, $number, $answer)
    {
        $this->trainingRepository->markAsWatched("$itemId.$number", $answer);
    }

    public function answers()
    {
        $this->trainingRepository->registerAnswers(request()->get('quiz'));

        return json_encode(['success' => true]);
    }
}
