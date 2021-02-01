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
                                <h1 class="title-alert">Confirme a sua escolha</h1>
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
            <div class="col-xs-12">
                <div class="comofunciona-panel-border {{ $flag->color }}">
                    <div class="colors-panel-body supernova-yellow text-center">
                        <img class="img-responsive" src="{{ $flag->image_url }}">
                        <p class="botoes-capacitacao">
                            <a
                                href="{{ route('flag-contest.vote.cast', ['flag_id' => $flag->id]) }}"
                                class="btn violet-red btn-apostilas"
                            >
                                <i class="glyphicon glyphicon-bookmark"></i> Confirmo que esta é a minha escolha de bandeira
                            </a>
                            <a
                                href="{{ route('flag-contest.vote.index') }}"
                                class="btn cerulean-blue btn-apostilas"
                            >
                                <i class="glyphicon glyphicon-bookmark"></i> Voltar
                            </a>
                        </p>
                    </div>
                </div>

                <br>
            </div>
        </div>

    </section>
@stop
