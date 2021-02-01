@extends( get_current_year().'.layouts.layout')

@section('contents')


    <section id="vue-quiz" class="fundo-quiz capacitacao-content">
        <div class="container">

            <div class="row text-center">

                <div class="col-12">

                    <div class="titulo-comofunciona">
                        <h2>Capacitação</h2>
                    </div>

                </div>

            </div>


            <div class="row">
                <div class="col-12 text-center">

                    <h2>Quiz</h2>

                </div>
            </div>

            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="results-header caixa-preta text-center">
                            <h4>Você acertou</h4>
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

                <div class="row mt-4 pt-4">
                    <div class="col-12 text-center">
                        <a class="btn btn-danger btn-voltar" href="{{ route('training.content') }}">
                            <i class="fa fa-undo fa-lg"></i> Voltar à capacitação
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('javascript')
@stop
