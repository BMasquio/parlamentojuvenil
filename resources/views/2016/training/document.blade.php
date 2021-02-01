@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="header-capacitacao" class="fundo-capacitacao-video">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    <h2>Capacitação</h2>

                    {{--<div class="capacitacao-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et tellus eget diam sagittis rutrum at at eros. Vestibulum vel efficitur nibh. Vestibulum consectetur, tortor sed feugiat rhoncus, nisi tortor semper risus, ut accumsan massa neque quis diam. In egestas eros et enim tempus, ac semper enim dignissim. Cras porta elit quis iaculis bibendum. Praesent pellentesque sapien odio, id aliquam metus dictum in. Maecenas dapibus lorem feugiat risus ultrices sollicitudin. Vivamus fringilla ullamcorper libero. Donec eget eleifend ligula. Etiam a consequat urna.</div>--}}
                    <div class="alert alert-info">
                        <div class="capacitacao-greatings">Olá <span  class="capacitacao-username">{{ $loggedUser->name }}</span></div>
                    <P>Por favor clique no botão abaixo para baixar a apostila<BR> <strong>{{ $lesson['title'] }}</strong></P>
                    </div>

                    {{--<a href="{{ $lesson['document-url'] }}" class="btn btn-large btn-primary" target="_blank"><span class="fa-stack fa-lg">
<i class="fa fa-download fa-stack-1x"></i></span>Baixar documento</a>

                    <a href="{{ route('training.index', ['year' => 2016]) }}" class="btn btn-primary">
                        <span class="fa-stack fa-lg"><i class="fa fa-undo fa-stack-2x"></i></span> Voltar</a>--}}


                    <a class="btn btn-success" href="{{ $lesson['document-url'] }}">
                        <i class="fa fa-download fa-lg"></i> Baixar documento </a>

                    <a class="btn btn-danger" href="{{ route('training.index', ['year' => 2016]) }}">
                        <i class="fa fa-undo fa-lg"></i> Voltar </a>

                </div>
            </div>




        </div>
    </section>


@stop
