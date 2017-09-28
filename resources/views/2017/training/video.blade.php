@extends('2017.layouts.layout')

@section('contents')
    <section id="header-capacitacao" class="capacitacao-content">
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
                    {{--<div class="row">
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
                    </div>--}}
                    <div class="row text-center">
                        <div class="titulo-comofunciona">
                            <h2>Capacitação</h2>
                            <div class="capacitacao-video-heading">
                                <div class="capacitacao-greatings">Olá <span  class="capacitacao-username">{{ $loggedUser->name }}</span></div>
                                <div class="capacitacao-tit-video">{{ $lesson['title'] }}</div>
                            </div>
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






            <div class="container capacitacao-video">
                <div class="row">
                    <div class="col-xs12">
                        <div class='embed-container'><iframe src='{{ $lesson['video-url'] }}' frameborder='0' allowfullscreen></iframe></div>
                    </div>

                    <a class="btn btn-danger btn-voltar" href="{{ route('training.index', ['year' => 2017]) }}">
                        <i class="fa fa-undo fa-lg"></i> Voltar </a>
                </div>
            </div>

            {{--<a href="{{ route('training.index', ['year' => 2017]) }}" class="btn btn-primary">Voltar</a>--}}

        </div>
    </section>
@stop
