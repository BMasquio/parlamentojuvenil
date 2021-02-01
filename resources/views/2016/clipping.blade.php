@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header')


    <section id="home">
        <div id="main-slider" class="carousel slide" data-ride="carousel">
            {{--    <ol class="carousel-indicators">
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider" data-slide-to="1"></li>
                </ol>--}}
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="/templates/2016/images/edicoes/vix/banner_vix.jpg" alt="slider">
                    {{--<div class="carousel-caption">
                        <h2>Inscreva-se para a edição 2016 </h2>
                        <h4>participe do Parlamento Juvenil</h4>
                        <a href="#contact">Faça a sua inscrição <i class="fa fa-angle-right"></i></a>
                    </div>--}}
                </div>
                {{--                <div class="item">
                                    <img class="img-responsive" src="/templates/2016/images/slider/bg2.jpg" alt="slider">
                                    <div class="carousel-caption">
                                        <h2>Edição 2015 </h2>
                                        <h4>saiba o que aconteceu na 10ª edição</h4>
                                        <a href="#contact">Saiba Mais <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>--}}

            </div>
        </div>
    </section>
    <!--/#home-->

    @include('2016.partials.clipping')
@stop
