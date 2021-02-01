@extends('2017.layouts.layout')

@section('contents')
    <section id="identify" class="identify-yourself">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <div>
                        <h3 class="identify-title">
                            @if (loggedUser()->is_voting)
                                Para votar você precisa se identificar.</h3>
                            @elseif (loggedUser()->is_flag_contest_subscribing)
                                Para inscrever a sua bandeira você precisa se identificar.
                            @elseif (loggedUser()->is_flag_contest_voting)
                                Para votar em uma bandeira você precisa se identificar.
                            @elseif (loggedUser()->is_training)
                                Para acessar o site da capacitação on-line, você precisa ser um(a) parlamentar juvenil. Por favor identifique-se:
                            @else
                                Identifique-se
                            @endif
                        </h3>
                    </div>

                    <div class="social-login">
                        <a href="{{ route('auth.social.redirect', ['facebook']) }}" class="facebook-login">
                            <img src="/templates/2017/assets/img/sociallogin-facebook.png" class="btn-login-social">
                            Entrar com facebook
                        </a>
                        <a href="{{ route('auth.social.redirect', ['twitter']) }}"  class="twitter-login" >
                            <img src="/templates/2017/assets/img/sociallogin-twitter.png" class="btn-login-social">
                            Entrar com Twitter
                        </a>
                        <a href="{{ route('auth.social.redirect', ['instagram']) }}"  class="instagram-login">
                            <img src="/templates/2017/assets/img/sociallogin-instagram.png" class="btn-login-social">
                            Entrar com Instagram
                        </a>
                        <a href="{{ route('auth.social.redirect', ['linkedin']) }}"  class="linkedin-login">
                            <img src="/templates/2017/assets/img/sociallogin-linkedin.png" class="btn-login-social">
                            Entrar com Linkedin
                        </a>
                        <a href="{{ route('auth.social.redirect', ['youtube']) }}" class="youtube-login" >
                            <img src="/templates/2017/assets/img/sociallogin-youtube.png" class="btn-login-social">
                            Entrar com Youtube
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="nao-possui-redes">
                        <a href="naotenhorede.html"><p><a href="{{ route('auth.login.email') }}">Caso você não esteja em nenhuma dessas redes sociais, clique aqui.</a></p></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
