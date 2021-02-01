@extends('2017.layouts.layout')

@section('contents')
    <!-- Subscribe Section -->
    <section id="subscribe-section" class="subscribe-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3 class="identify-title">Recupere sua senha</h3>
                    <form id="email-register-login-form" method="POST" action="{{ route('auth.login.email.password') }}" id="loginform" class="form-signin">
                        {{ csrf_field() }}

                        <h2>Por favor, entre em contato com a administração do Parlamento Juvenil.</h2>

                        {{--<fieldset>--}}
                            {{--<div class="row text-left">--}}
                                {{--<label for="email" class="control-label">E-mail</label>--}}
                                {{--<input class="form-control email-title" placeholder="E-mail" name="email" type="text">--}}
                            {{--</div>--}}

                            {{--<div class="row subscribe-buttons">--}}
                                {{--<div class="col-md-12 signin-btn-container">--}}
                                    {{--<button type="submit" class="btn btn-md btn-signin">Recuperar senha</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</fieldset>--}}
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
