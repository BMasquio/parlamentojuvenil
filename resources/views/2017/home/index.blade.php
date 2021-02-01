@extends('2017.layouts.layout')

@section('contents')
    <section class="notifications">
        {{--<div class="jumbotron text-center" style="background-color: #F58220;">--}}
            {{--<h1 style="font-weight: 800;">ADIADO</h1>--}}
            {{--<br><br><br>--}}
            {{--<h4>Comunicamos o adiamento da edição 2017 do Parlamento Juvenil prevista para ocorrer do dia 26 de novembro a 02 de dezembro.</h4>--}}

            {{--<br><br><br><br>--}}
            {{--<a href="/files/apps/parlamentojuvenil/site/2017/downloads/nota-adiamento-2017.pdf" class="well">--}}
                {{--<br>--}}
                {{--<i class="fa fa-download" aria-hidden="true" style="font-size: 3em;"></i>--}}
                {{--<p>Clique para baixar a nota de adiamento</p>--}}
            {{--</a>--}}
        {{--</div>--}}

        @if (config('app.subscriptions.enabled') === true)
            <div class="jumbotron text-center">
                <h2>Inscrições abertas</h2>
                <p>Alunos do 1º e 2º ano do ensino médio da Rede Pública Estadual do Rio de Janeiro, com idade entre 14 e 17 anos (nascidos entre 26 de novembro de 2003 e 3 de dezembro de 1999).</p>
                <a href="{{ route('subscribe.index') }}" class="btn btn-block btn-primary btn-large center-block">
                    Clique para se inscrever
                </a>
            </div>
        @endif

        @if (config('app.flag.contest.show_rules'))
            <div class="jumbotron text-center flag-tournment jacksons-purple">
                <div class="row">
                    <div class="col-md-8 pull-right">
                        <h2>Concurso Para Seleção da Bandeira do Parlamento Juvenil {{ get_current_year() }}</h2>
                        {{--<h3>Inscrições até 04/09 de 2017</h3>--}}
                    </div>

                    <div class="col-md-4">
                        <img class="bandeira-pj " src="/templates/2017/assets/img/bandeira-pj.png">
                    </div>

                    <div class="col-md-12 flag-subscription hidden-lg ">
                        @if (flag_contest_subscription_enabled())
                            <p></p><a href="/flag-contest/subscribe" class="btn btn-primary btn-large">
                                Inscreva-se Agora
                            </a>
                            </p>
                        @endif

                        @if (flag_contest_election_enabled())
                            <p><a href="/flag-contest/vote" class="btn btn-primary btn-large bg-torch-red">
                                VOTE AQUI
                            </a>
                            </p>
                        @endif

                        <p><a href="/files/apps/parlamentojuvenil/site/2017/downloads/edital-concurso-bandeira-parlamento-juvenil-2017-01.pdf">
                            <img class="baixar-edital" src="/templates/2017/assets/img/baixar-edital.png">
                        </a>
                        </p>
                    </div>

                    <div class="col-md-12 flag-subscription supernova-yellow visible-lg-block ">
                        {{--@if (flag_contest_subscription_enabled())--}}
                            {{--<a href="/flag-contest/subscribe" class="btn btn-primary btn-large">--}}
                                {{--Inscreva-se Agora--}}
                            {{--</a>--}}
                        {{--@endif--}}

                        @if (flag_contest_election_enabled())
                            <a href="/flag-contest/vote" class="btn btn-primary btn-large bg-torch-red">
                                VOTE AQUI
                            </a>
                        @endif

                        <a href="/files/apps/parlamentojuvenil/site/2017/downloads/edital-concurso-bandeira-parlamento-juvenil-2017-01.pdf">
                            <img class="baixar-edital" src="/templates/2017/assets/img/baixar-edital.png">
                        </a>
                    </div>
                </div>

                <br><br><br><br>

                {{--<div class="text-center">--}}
                    {{--<h1>CANDIDATAS</h1>--}}

                    {{--<br><br>--}}
                    {{--<div class="row">--}}
                        {{--@foreach($flags as $flag)--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-12 box-border-15">--}}
                                        {{--<img src="{{ $flag->thumbnail_url }}" class="img-responsive" alt="">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="text-center">
                    <div class="row">
                        @foreach($winnerFlags as $flag)
                            <div class="winner-{{$flag->winner_position}}">
                                <h{{$flag->winner_position}}>{{ $flag->winner_position }}° LUGAR</h{{$flag->winner_position}}>

                                <br><br>

                                <div class="col-md-12">
                                    <img src="{{ $flag->thumbnail_url }}" class="img-responsive" alt="" style="display: block; margin: 0 auto;">
                                    <p>{{ $flag->winner_description }}</p>
                                    <br><br>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if (election_enabled())
            <div class="jumbotron text-center">
                <h2>2o Turno - Vote agora</h2>
                <p>Todos os alunos da Rede Pública Estadual do Rio de Janeiro podem votar.</p>
                <a href="{{ route('vote.index') }}" class="btn btn-block btn-primary btn-large center-block">
                    ESCOLHA SEU CANDIDATO
                </a>
                <br>
                <br>
                <div class="row">
                    <?php $color = 1; ?>
                    @foreach ($citiesInCurrentRound as $city)
                        <div class="col-md-3" style="margin-bottom: 15px;">
                            <a href="{{ route('vote.index') }}" class="btn btn-block {{ $color++ % 2 == 0 ? 'jacksons-purple' : 'danube-blue' }}">
                                {{ $city->city }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{--@if (legislative_process_enabled())--}}
            {{--<div class="jumbotron text-center">--}}
                {{--<h2>Processo Legislativo</h2>--}}
                {{--<p>Se você foi eleito parlamentar juvenil em 2017.</p>--}}
                {{--<a href="http://www2.alerj.rj.gov.br/parlamentojuvenil/projetolei/logar.aspx" class="btn btn-block btn-primary btn-large center-block">--}}
                    {{--CLIQUE AQUI PARA INSERIR O SEU PROJETO DE LEI--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--@endif--}}

        @if (training_enabled())
            <div class="jumbotron text-center">
                <h2>Capacitação on-line</h2>
                <p>Se você foi eleito parlamentar juvenil em 2017.</p>
                <a href="{{ route('training.content') }}" class="btn btn-block btn-primary btn-large center-block">
                    CLIQUE AQUI PARA ACESSAR A PÁGINA DE CAPACITAÇÃO
                </a>
            </div>
        @endif

        @if (config('app.election.show-elected-2nd') === true)
            <a href="/vote/elected/round/2" >
                <div class="jumbotron see-elects-1round text-center jacksons-purple">
                    <p><img class="elected-badge" src="/templates/2017/assets/img/elected.svg">Eleitos no 2º Turno</p>
                    <h3>Conheça os Deputados Estaduais Juvenis de 2017</h3>
                </div>
            </a>

            {{--<a href="/files/apps/parlamentojuvenil/site/2017/downloads/resultado-pj-2017.pdf" >--}}
                {{--<div class="jumbotron see-elects-1round text-center jacksons-purple">--}}
                    {{--<p><img class="elected-badge" src="/templates/2017/assets/img/elected.svg">Eleitos no 2º Turno</p>--}}
                    {{--<h3>Conheça os Deputados Estaduais Juvenis de 2017</h3>--}}
                {{--</div>--}}
            {{--</a>--}}
        @endif

        @if (config('app.election.show-elected-1nd') === true)
            <a href="/vote/elected/round/1" >
                <div class="jumbotron see-elects-1round text-center jacksons-purple">
                    <p><img class="elected-badge" src="/templates/2017/assets/img/elected.svg">1º Turno - Veja os eleitos</p>
                </div>
            </a>
        @endif
    </section>

    @include('2017.home.partials.downloads')

    <section class="masonry-pj">
        <div class="container">
            <div class="row">
                <div class="grid">
                    <div class="grow grid-item rouge">
                        <img class="masonry-overflow masonry10 img-responsive" src="/templates/2017/images/masonry-10.png">
                    </div>
                    <div class="grow grid-item cerulean-blue"></div>
                    <div class="grow grid-item haze-green"></div>
                    <div class="grow grid-item grid-item--height2 white">
                        <img class="masonry-padding img-responsive" src="/templates/2017/images/masonry-03.png">
                    </div>
                    <div class="grow grid-item lima-green"><img class="masonry-overflow masonry07" src="/templates/2017/images/masonry-07.png"></div>
                    <div class="grow grid-item verde2"></div>
                    <div class="grow grid-item danube-blue">
                    </div>
                    <div class="grow grid-item lima-green">
                        <img class="hidden-sm masonry-overflow masonri-right masonry08" src="/templates/2017/images/masonry-08.png">
                    </div>

                    <div class="grow grid-item violet-red"></div>

                    @if (election_enabled())
                        <div class="grow grid-item grid-item--height3 white">
                            <a href="{{ route('vote.index') }}"><img class="" src="/templates/2017/images/vote-agora.png"></a>
                        </div>
                    @else
                        <div class="grow grid-item grid-item--height3 cerulean-blue">
                            <img class="masonry-overflow masonry-big" src="/templates/2017/images/masonry-big.png">
                        </div>
                    @endif


{{--
                    <div class="grow grid-item grid-item--height3 cerulean-blue">
                        <img class="masonry-overflow masonry-big" src="/templates/2017/images/masonry-big.png">
                    </div>
--}}


                    <div class="grow grid-item haze-green"></div>
                    <div class="grow grid-item supernova-yellow"></div>
                    <div class="grow grid-item torch-red"></div>
                    <div class="grow grid-item supernova-yellow">
                        <img class="hidden-sm masonry-overflow masonry11" src="/templates/2017/images/masonry-11.png">
                    </div>
                    <div class="grow grid-item cerulean-blue"></div>
                    <div class="grow grid-item grid-item--height2 jacksons-purple">
                        {{--<img class="asonry-padding paddingtop40 masonry-informacoes img-responsive" src="/templates/2017/images/masonry-05.png"><br>--}}
                        <div class="informacoes-masonry text-center">
                            <div class="title">Informações</div><br>
                            <div class="telefones">21 2588-1536 ou 21 2588-1202</div>
                        </div>
                        <div class="social-links-home text-center">
                            <a target="_blank" href="//www.facebook.com/parlamentojuvenilrio/"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="//www.youtube.com/user/parlamentojuvenilrj"><i class="fa fa-youtube"></i></a>
                        </div>

                    </div>
                    <div class="grow grid-item ecstasy-orange">
                        <img class="masonry-overflow masonry10" src="/templates/2017/images/masonry-06.png">
                    </div>

                    {{--<div class="grow grid-item cerulean-blue"></div>--}}

                    <div class="grow grid-item ecstasy-orange"></div>

                    <div class="grow grid-item grid-item--height2 white">
                        <img class="masonry-padding img-responsive" src="/templates/2017/images/logo-alerj-cores.png">
                    </div>

                    <div class="grow grid-item haze-green"></div>

                    {{--<div class="grow grid-item torch-red"></div>--}}
                </div>
            </div>
        </div>
    </section>

    @include('2017.home.partials.about')
    @include('2017.home.partials.howitworks')

    @if (app()->environment() != 'production')
        @include('2017.home.partials.timeline')

        {{--@include('2017.home.partials.subscriptions-map')--}}
    @endif
@stop
