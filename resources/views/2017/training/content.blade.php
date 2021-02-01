@extends('2017.layouts.layout')

@section('contents')
    <section id="header-capacitacao-content" class="capacitacao-content">
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
                    <div class="row">
                        <div class="hidden-sm col-sm-hidden col-md-7 col-lg-7">
                            <div class="grow grid-item--height5 supernova-yellow">
                            </div>
                        </div>
                        <div class="hidden-sm col-md-1 col-lg-1">
                            <div class="grow grid-item--height5 white">
                            </div>
                        </div>
                        <div class="hidden-sm col-md-3 col-lg-4">
                            <div class="grow grid-item--height5 lima-green">
                            </div>
                        </div>
                    </div>
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
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="row text-center capacitacao-intro">
                        <div class="capacitacao-greatings">Olá <span  class="capacitacao-username">{{ loggedUser()->user->name }},</span>
                            {{--<a href="/2017/training/logout" class="btn btn-primary">Sair</a>--}}
                        </div>

                        <p> É uma honra para o Parlamento Juvenil da ALERJ, recebê-lo por aqui. </p>
                        <p> É importante que faça todo o processo de capacitação com muita atenção, para que conheça as ferramentas necessárias para elaborar o seu projeto de lei, que pode ir para a mão do Governador.</p>

                        Boa aula!
                    </div>
                </div>
            </div>
            <div class="row aulas">

                @foreach($training as $courseKey => $course)
                    <div class="col-md-6">
                        {{--{{ json_encode($course) }}--}}
                        <div class="comofunciona-panel-border {{ ($course['id'] % 2) == 0 ? 'cerulean-blue' : 'violet-red' }}">
                            <div class="assistido">
                                <i class="fa {{ $course['done'] ? 'fa-check-square-o' : 'fa-square-o' }}" aria-hidden="true"></i>
                            </div>
                            <div class="colors-panel-body supernova-yellow text-center">
                                <img class="img-responsive" src="/templates/2017/images/capacitacao/capa-aula1.png">
                                <p class="botoes-capacitacao">
                                    <a
                                        href="{{ $course['relations']['videos'][0]['watch-url'] }}"
                                        class="btn violet-red btn-apostilas"
                                        {{ !$course['relations']['videos'][0]['visible'] ? 'disabled="disabled"' : '' }}
                                    >
                                        Vídeo
                                        <span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-film"></span>
                                    </a>

                                    <a
                                        href="{{ $course['relations']['documents'][0]['watch-url'] }}"
                                        class="btn danube-blue btn-apostilas"
                                        {{ !$course['relations']['documents'][0]['visible'] ? 'disabled="disabled"' : '' }}
                                    >
                                        Apostila
                                        <span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-list-alt"></span>
                                    </a>

                                    <a
                                        href="{{ $course['relations']['quiz'][0]['watch-url'] }}"
                                        class="btn ecstasy-orange btn-apostilas"
                                        {{ !$course['relations']['quiz'][0]['visible'] ? 'disabled="disabled"' : '' }}
                                    >
                                        Quiz
                                        <span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-list-alt"></span>
                                    </a>
                                </p>
                            </div>

                            @if (!$course['visible'])
                                <div class="black-overlay">
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
