@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="header-capacitacao" class="fundo-quiz">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    &nbsp;<BR>
                    <h2>Quiz</h2>
                    {{--<br>
                    <div class="capacitacao-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et tellus eget diam sagittis rutrum at at eros. Vestibulum vel efficitur nibh. Vestibulum consectetur, tortor sed feugiat rhoncus, nisi tortor semper risus, ut accumsan massa neque quis diam. In egestas eros et enim tempus, ac semper enim dignissim. Cras porta elit quis iaculis bibendum. Praesent pellentesque sapien odio, id aliquam metus dictum in. Maecenas dapibus lorem feugiat risus ultrices sollicitudin. Vivamus fringilla ullamcorper libero. Donec eget eleifend ligula. Etiam a consequat urna.</div>
                    <br>--}}
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs12">

                        <div class="modal-dialog">
                            <div class="quadro-amarelo borda-preta ">
                                <div class="results-header caixa-preta text-center">
                                    <h4>Você acertou</h4>
                                </div>

                                <div class="results-body">
                                    <div class="rating-block text-center">
                                        <h2 class="bold padding-bottom-7">{{ $correct }} <small> de um total de {{ $total }}</small></h2>
                                        <div class="text-center">
                                            <div class="pull-left" style="width:{{ $percent }}%;">
                                                <div class="progress" style="height:16px; margin:8px 0;">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $correct }}" aria-valuemin="0" aria-valuemax="{{ $total }}" style="width: 1000%">
                                                        <span class="sr-only">80% Complete (danger)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('training.index', ['year' => 2016]) }}" class="btn btn-lg btn-block btn-submit-subscription quadro-vermelho borda-preta">Voltar à capacitação</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('javascript')
@stop
