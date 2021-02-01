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
                            <h4>Bem-vindo, parlamentar juvenil!</h4>

                            É muito importante que você cumpra todo o processo para que consiga redigir o seu projeto de lei. <br>
                            Qualquer dúvida, entre em contato com a gente pelo e-mail: <a href="mailto:@include('partials.email')">@include('partials.email')</a>  <br> ou pelos telefones: (21) 2588-1202 // (21) 2588-1536.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item ecstasy-orange">
                    </div>
                </div>
            </div>

            <div class="row"  transition="expand">
                <div class="form-group col-xs-12">
                    <a href="/training/content" id="submit" type="submit" class="btn btn-lg btn-primary btn-block btn-submit-subscription">
                        Inicar capacitação
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop
