@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="header-capacitacao-content" class="fundo-capacitacao-content">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    &nbsp;<BR>
                    <h2>Capacitação</h2>
                    &nbsp;<BR> &nbsp;<BR>
                    <div class="capacitacao-greatings">Olá <span  class="capacitacao-username">{{ $loggedUser->name }}</span></div>
                    <a href="/2016/training/logout" class="btn btn-primary">Sair</a>
                    <div class="capacitacao-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et tellus eget diam sagittis rutrum at at eros. Vestibulum vel efficitur nibh. Vestibulum consectetur, tortor sed feugiat rhoncus, nisi tortor semper risus, ut accumsan massa neque quis diam. In egestas eros et enim tempus, ac semper enim dignissim. Cras porta elit quis iaculis bibendum. Praesent pellentesque sapien odio, id aliquam metus dictum in. Maecenas dapibus lorem feugiat risus ultrices sollicitudin.</div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs12">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fundo-azul1">
        <div class="container">
            <div class="row">
                <a name="apostilas">
                </a>
                <div class="col-xs-12 capacitacao-videos ">
                    <div class="capacitacao-videos-titulo">
                        <h2>AULAS</h2>
                    </div>

                    @foreach($training as $courseKey => $course)
                        <div class="video-box {{ $course['visible'] ? '' : 'inactive' }}"> <!-- class inactive -->
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="/pj2016/images/capacitacao/aula00{{$courseKey+1}}.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="{{ $course['relations']['videos'][0]['watch-url'] }}">
                                        <h4 class="media-heading">º01 - Título da Aula</h4>
                                        <p>Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Aenean sit amet felis dolor, in sagittis nisi.  Aenean sit amet felis dolor, in sagittis nisi.  Aenean sit amet felis dolor, in sagittis nisi. Aenean sit amet felis dolor, in sagittis nisi.</p>
                                    </a>
                                    <p>
                                        @if($course['relations']['videos'][0]['visible'])
                                            <a href="{{ $course['relations']['videos'][0]['watch-url']  }}" class="btn caixa-amarela btn-apostilas">Vídeo<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-film"></span></a>
                                        @endif

                                        @if($course['relations']['documents'][0]['visible'])
                                            <a href="{{ $course['relations']['documents'][0]['watch-url'] }}" class="btn caixa-amarela btn-apostilas">Apostila<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-list-alt"></span></a>
                                        @endif

                                        @if($course['relations']['quiz'][0]['visible'])
                                            <a href="{{ $course['relations']['quiz'][0]['watch-url'] }}" class="btn caixa-amarela btn-apostilas">Quiz<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-question-sign"></span></a>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@stop
