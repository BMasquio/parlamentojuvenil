@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="header-capacitacao" class="fundo-capacitacao-video">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    &nbsp;<BR>
                    <h2>Capacitação</h2><br>
                    <div class="capacitacao-greatings">Olá <span  class="capacitacao-username">{{ $loggedUser->name }}</span></div>
                    <div class="capacitacao-tit-video">{{ $lesson['title'] }}</div>

                    {{--<div class="capacitacao-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et tellus eget diam sagittis rutrum at at eros. Vestibulum vel efficitur nibh. Vestibulum consectetur, tortor sed feugiat rhoncus, nisi tortor semper risus, ut accumsan massa neque quis diam. In egestas eros et enim tempus, ac semper enim dignissim. Cras porta elit quis iaculis bibendum. Praesent pellentesque sapien odio, id aliquam metus dictum in. Maecenas dapibus lorem feugiat risus ultrices sollicitudin. Vivamus fringilla ullamcorper libero. Donec eget eleifend ligula. Etiam a consequat urna.</div>--}}
                </div>
            </div>

            <div class="container capacitacao-video">
                <div class="row">
                    <div class="col-xs12">
                        <div class='embed-container'><iframe src='{{ $lesson['video-url'] }}' frameborder='0' allowfullscreen></iframe></div>
                    </div>

                    <a class="btn btn-danger" href="{{ route('training.index', ['year' => 2016]) }}">
                        <i class="fa fa-undo fa-lg"></i> Voltar </a>
                </div>
            </div>

            {{--<a href="{{ route('training.index', ['year' => 2016]) }}" class="btn btn-primary">Voltar</a>--}}

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
