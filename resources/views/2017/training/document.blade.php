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
                <div class="col-sm-2">
                    <div class="grow grid-item danube-blue">
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="row text-center">
                        <div class="capacitacao-heading">
                            <h4>Olá <span  class="capacitacao-username">{{ $loggedUser->name }}</span></h4>

                            Por favor clique no botão abaixo para baixar a apostila <strong>{{ $lesson['title'] }}</strong>:
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item ecstasy-orange">
                    </div>
                </div>
            </div>

            <div class="row" transition="expand">
                <div class="col-xs-12 text-center">
                    <a class="btn btn-success btn-lg" href="{{ $lesson['document-url'] }}" target="_blank">
                        <i class="fa fa-download fa-lg"></i> Baixar documento
                    </a>

                    <br><br><br>
                    <a class="btn btn-danger" href="{{ route('training.content') }}">
                        <i class="fa fa-undo fa-lg"></i> Voltar
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop
