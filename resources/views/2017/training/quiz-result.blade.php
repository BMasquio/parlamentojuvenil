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
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs12">
                            <div class="modal-dialog">
                                <div class="quadro-amarelo borda-preta">
                                    <div class="results-header caixa-preta text-center">
                                        <h4>Você acertou</h4>
                                        <br>
                                    </div>

                                    <div class="results-body">
                                        <div class="rating-block text-center">
                                            <h2 class="bold padding-bottom-7">{{ $correct }} <small> de um total de {{ $total }}</small></h2>
                                            <div class="text-center">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $percent }}"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:{{ $percent }}%">
                                                        <span class="sr-only">{{ $percent }}% Completado</span>
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
            </div>

            <div class="container capacitacao-video">
                <div class="row">
                    <a class="btn btn-danger btn-voltar" href="{{ route('training.content') }}">
                        <i class="fa fa-undo fa-lg"></i> Voltar à capacitação
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop

@section('javascript')
@stop
