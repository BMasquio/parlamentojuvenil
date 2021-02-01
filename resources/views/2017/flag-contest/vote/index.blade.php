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
                            <h2>Eleição da Bandeira do Parlamento Juvenil</h2>
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
                            <div class="alert alert-success text-center" role="alert">
                                <h1 class="title-alert">Escolha sua bandeira preferida</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item ecstasy-orange">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($flags as $flag)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="colors-panel-body supernova-yellow text-center">
                        <img class="img-responsive img-center" src="{{ $flag->thumbnail_url }}" style="margin: 0 auto;">
                        <p class="botoes-capacitacao">
                            <a
                                href="{{ route('flag-contest.vote.select', ['flag_id' => $flag->id]) }}"
                                class="btn violet-red btn-apostilas"
                            >
                                <i class="glyphicon glyphicon-bookmark"></i> Votar
                            </a>
                        </p>
                    </div>

                    <br>
                </div>
            @endforeach
        </div>

    </section>
@stop
