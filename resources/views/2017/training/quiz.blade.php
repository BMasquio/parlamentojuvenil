@extends('2017.layouts.layout')

@section('contents')
    <section id="vue-quiz" class="fundo-quiz capacitacao-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="grow grid-item danube-blue">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item verde2">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row text-center">
                        <div class="titulo-comofunciona">
                            <h2>Capacitação</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item ecstasy-orange">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item violet-red">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs12 text-center">
                    <br>
                    <h2>Quiz</h2>
                    <br>
                    <br>
                    <br>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="quiz-pergunta">
                            <div class="quiz-content quadro-amarelo borda-preta" v-if="quiz">
                                <div class="row caixa-preta">
                                    <div class="col-xs-12 numero-pergunta quadro-amarelo text-center">
                                        <h4><span class="numero-quiz" id="qid">Pergunta @{{ currentQuestion+1 }}</span></h4>
                                        <br>
                                        <h3><strong>@{{ quiz.questions[currentQuestion].question }}</strong></h3>
                                        <br>
                                        <br>
                                    </div>
                                </div>

                                <div class="quiz-body">
                                    <div class="quiz" id="quiz" data-toggle="buttons">
                                        <div v-for="(answer, index) in quiz.questions[currentQuestion].answers">
                                            <div class="row answer-row">
                                                <div class="col-xs-12">
                                                    <label
                                                            :class="'btn btn-lg btn-block ' + (index == quiz.questions[currentQuestion].user_answer ? 'btn-danger' : 'btn-primary')"
                                                            v-on:click="answerQuestion(index)"
                                                    >
                                                        @{{ index }}

                                                        <span class="btn-label">
                                                            <i class="glyphicon glyphicon-chevron-right"></i>
                                                        </span>

                                                        @{{ answer }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container capacitacao-video">
                <div class="row">
                    <br><br>
                    <div class="btn btn-warning" @click="previousQuestion()" :disabled="currentQuestion == 0">Anterior</div>
                    <div class="btn btn-warning" @click="nextQuestion()" :disabled="isLastQuestion()">Proxima</div>
                    <div class="btn btn-primary" @click="sendAnswers()" :disabled="!isLastQuestion() || !allAnswered()">Enviar</div>
                </div>
            </div>

            <div class="container capacitacao-video">
                <div class="row">
                    <a class="btn btn-danger btn-voltar" href="{{ route('training.content') }}">
                        <i class="fa fa-undo fa-lg"></i> Sair do Quiz
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop

@section('page-javascripts')
    @include('scripts.vueQuiz')
@stop
