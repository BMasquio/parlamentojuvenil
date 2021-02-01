@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="header-capacitacao" class="fundo-capacitacao">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    &nbsp;<BR>
                    <h2>Capacitação</h2>
                    <br><br>
                    <div class="capacitacao-heading">
                        <h4>Bem vindos, parlamentares juvenis!</h4>

                        <p>Insira aqui sua Matrícula e sua data de nascimento para ter acesso à area restrita das Capacitações On-Line.</P>
                        É muito importante que você cumpra todo o processo para que consiga redigir o seu projeto de lei. <br>
                        Qualquer dúvida, entre em contato com a gente pelo e-mail: <a href="mailto:@include('partials.email')">@include('partials.email')</a>  <br> ou pelos telefones: (21) 2588-1202 // (21) 2588-1536.</p>

                    </div>
                    <br>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs12">
                        @include('partials.training-login-form')
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="fundo-azul1">
        <div class="container">
            <div class="row">
                <div class="col-xs12">

                </div>
            </div>
        </div>
    </section>--}}


@stop
