@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="titulo" class="fundo-inscricao">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    <h1>&nbsp;</h1>
                    <h1>Inscreva-se</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="fundo-azul1">
        <div class="container">
            <div class="row">
                <div class="col-xs12">
                    @include('partials.subscribe-form')
                </div>
            </div>
        </div>
    </section>

    @include('scripts.simpleForm')
@stop
