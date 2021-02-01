@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="header-capacitacao" class="fundo-quiz">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    &nbsp;<BR>
                    <h2>Resultado do Quiz</h2>
                    {{--<br>
                    <div class="capacitacao-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et tellus eget diam sagittis rutrum at at eros. Vestibulum vel efficitur nibh. Vestibulum consectetur, tortor sed feugiat rhoncus, nisi tortor semper risus, ut accumsan massa neque quis diam. In egestas eros et enim tempus, ac semper enim dignissim. Cras porta elit quis iaculis bibendum. Praesent pellentesque sapien odio, id aliquam metus dictum in. Maecenas dapibus lorem feugiat risus ultrices sollicitudin. Vivamus fringilla ullamcorper libero. Donec eget eleifend ligula. Etiam a consequat urna.</div>
                    <br>--}}
                </div>
            </div>



            <div class="container">
                <div class="row">

                    <div class="col-xs12">
                        <div class="modal-dialog">
                            <div class="modal-content quadro-amarelo borda-preta ">

                                <div class="modal-header row caixa-preta">
                                    <div class="col-xs-12 text-center">
                                        <h3>Você Acertou</h3>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <div class="rating-block text-center">
                                        <h2 class="bold padding-bottom-7">4 <small> de um total de 5 perguntas</small></h2>
                                        <div class="text-center">
                                            <div class="pull-left" style="width:100%;">
                                                <div class="progress" style="height:16px; margin:8px 0;">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                                                        <span class="sr-only">80% Complete (danger)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer text-muted">
                                    <div class="answer" id="answer"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@stop

@section('javascript')
@stop
