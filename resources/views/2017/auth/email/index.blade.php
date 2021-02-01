@extends('2017.layouts.layout')

@section('contents')
    <!-- Subscribe Section -->
    <section id="subscribe-section" class="subscribe-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3 class="identify-title">Identifique-se</h3>
                    <form id="email-register-login-form" method="POST" action="{{ route('auth.login.email') }}" id="loginform" class="form-signin">
                        {{ csrf_field() }}

                        <fieldset>
                            <div class="row text-left">
                                <label for="email" class="control-label">E-mail</label>
                                <input class="form-control email-title" placeholder="E-mail" name="email" type="text">

                                <label for="password" class="control-label">Senha</label>
                                <input class="form-control" placeholder="Senha" name="password" type="password" value="">
                            </div>
                            <div class="row remember-forgot">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label><input name="remember" type="checkbox" value="Remember Me"> Lembrar de mim</label>
                                    </div>
                                </div>
                                <div class="col-md-6 forgot-password">
                                    <a class="pull-right" href="{{ route('auth.login.email.password') }}">Esqueceu sua senha?</a>
                                </div>
                            </div>
                            <div class="row subscribe-buttons">
                                <div class="col-md-6 signin-btn-container">
                                    <button type="submit" value="login" class="btn btn-md btn-signin">Entre</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" value="register" class="btn btn-md btn-signup">Cadastre-se</button>
                                </div>

                                <div class="col-md-12">
                                    <br>
                                    <button type="submit" value="password_reset" class="btn btn-md btn-password-reset">Enviar nova senha</button>
                                </div>
                            </div>
                            <div class="row ou-divider">
                                <h2 class="post-area-title">ou</h2>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
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
        </div>
    </section>
@stop

@section('page-javascripts')
    <script>
        var formId = 'email-register-login-form';

        function processForm(e) {
            if (e.preventDefault) {
                e.preventDefault();
            }

            var val = $(document.activeElement).val();

            var form = document.getElementById(formId);

            if (val == 'login') {
                form.action = '{{ route('auth.login.email.post') }}';
            } else if (val == 'register') {
                form.action = '{{ route('auth.login.email.register') }}';
            } else if (val == 'password_reset') {
                form.action = '{{ route('auth.login.email.password') }}';
            }

            console.log('-------------------------------------------');
            console.log(val);
            console.log(document.activeElement);
            console.log(form.action);

            form.submit();

            return true;
        }

        var form = document.getElementById(formId);

        if (form.attachEvent) {
            form.attachEvent("submit", processForm);
        } else {
            form.addEventListener("submit", processForm);
        }
    </script>
@stop
