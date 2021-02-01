<?php

namespace App\Data\Repositories;

use Session;
use App\Data\Models\Watched;
use Illuminate\Database\Eloquent\Collection;
use App\Data\Models\Training as TrainingModel;

class Training extends Repository
{
    public function findById($item, $subscription, $year)
    {
        $training = $this->addTrainingData(
            $subscription,
            TrainingModel::byYear($year)
        );

        foreach ($training as $course) {
            foreach ($course['relations'] as $relation) {
                foreach ($relation as $element) {
                    if ($element['id'] == $item) {
                        return $element;
                    }

                    if (
                        $element['type'] == 'quiz' &&
                        starts_with($item, $element['id'])
                    ) {
                        foreach ($element['questions'] as $key => $question) {
                            if ($element['id'] . '.' . $key == $item) {
                                return $question;
                            }
                        }
                    }
                }
            }
        }

        return null;
    }

    protected function getAnswerFor($id, $subscription, $answer, $year = null)
    {
        $year = get_current_year($year);

        $training = $this->findById($id, $subscription, $year);

        foreach ($training['questions'] as $key => $question) {
            if ("$id.$key" == $answer) {
                return $question['correct'];
            }
        }

        return null;
    }

    public function getResult($year, $id, $subscription)
    {
        $answers = Watched::where('item_id', 'like', $id . '.%')
            ->where('year', $year)
            ->where('subscription_id', $subscription->id)
            ->get()
            ->toArray();

        foreach ($answers as $key => $item) {
            $answers[$key]['correct'] =
                $answers[$key]['answer'] ==
                $this->getAnswerFor(
                    $id,
                    $subscription,
                    $answers[$key]['item_id'],
                    get_current_year()
                );
        }

        return $answers;
    }

    public function addTrainingData($subscription, $training, $year = null)
    {
        $year = get_current_year($year);

        $collection = new Collection();

        $visible = true;

        foreach ($training as $itemKey => $item) {
            $item['visible'] = $visible;

            foreach ($item['relations'] as $relationKey => $relation) {
                $done = true;

                foreach ($relation as $elementKey => $element) {
                    $element['id'] = "{$item['id']}.{$element['id']}";
                    $element['watch-url'] = route('training.watch', [
                        'video' => $element['id'],
                    ]);
                    $element['year'] = $year;

                    if (loggedUser()->isCongressman()) {
                        //Permitindo usuário não logado
                        $element['watched'] = Watched::where(
                            'subscription_id',
                            $subscription->id
                        )
                            ->where('year', $year)
                            ->where('item_id', $element['id'])
                            ->first();
                    }

                    $element['visible'] = $visible || $element['watched'];

                    if (loggedUser()->isCongressman()) {
                        //Permitindo usuário não logado
                        $done = $done && $element['watched'];

                        if ($relationKey == 'quiz') {
                            $element['answer'] = $element['watched']
                                ? $element['watched']->answer
                                : null;
                        }

                        $visible = $element['watched'] !== null;
                    }
                    $item['relations'][$relationKey][$elementKey] = $element;
                }
            }

            $item['done'] = $done;

            $collection->push($item);
        }

        return $collection;
    }

    public function markAsWatched($item, $answer = null, $year = null)
    {
        if (loggedUser()->isCongressman()) {
            //Permitindo usuário não logado
            $year = get_current_year($year);

            $watched = Watched::where(
                'subscription_id',
                $subscription_id = loggedUser()->subscription->id
            )
                ->where('year', $year)
                ->where('item_id', $item)
                ->first();

            if (!$watched) {
                $watched = Watched::create([
                    'subscription_id' => $subscription_id,
                    'item_id' => $item,
                    'year' => $year,
                ]);
            }

            $watched->answer = $answer;

            $watched->save();
        }
    }

    public function quizDone($year, $subscription, $id)
    {
        $exploded = explode('.', $id);

        if ($result = $this->getResult($year, $id, $subscription)) {
            $questions = TrainingModel::byYear($year)[$exploded[0] - 1][
                'relations'
            ]['quiz'][0]['questions'];

            $done = count($result) == count($questions);

            foreach ($result as $item) {
                $done = $done && $item['answer'];
            }
        }

        return $result ? $done : false;
    }

    public function registerAnswers($quiz)
    {
        foreach ($quiz['questions'] as $key => $question) {
            $this->markAsWatched(
                "{$quiz['id']}.$key",
                $question['user_answer']
            );
        }
    }
}
