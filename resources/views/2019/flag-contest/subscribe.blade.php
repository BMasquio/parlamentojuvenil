@extends( get_current_year().'.layouts.layout')

@section('contents')
    <div id="vue-flag-contest-subscribe" class="form-subscribe">
        <section id="subscribe" class="fundo-inscricao">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="subscribe-title">Prezado(a), <strong>{{ loggedUser()->student->name }}</strong>, <br>precisamos que você nos dê um endereço de e-mail ao qual tenha acesso:</h1>
                </div>
            </div>

            <div class="row form-subscribe-registration">
                <div class="col-md-offset-2 col-md-8 text-left">
                    <form id="form-flag-subscribe" method="POST" action="{{ route('flag-contest.subscribe.post') }}">
                        {!! csrf_field() !!}

                        <label for="registration" class="control-label">Digite o e-mail</label>
                        <input
                            v-model="email"
                            type="text"
                            class="form-control input-lg"
                            value="{{ loggedUser()->user->email }}"
                            placeholder="Digite o e-mail"
                            name="email"
                            id="email"
                            required data-validation-required-message="Por favor digite seu e-mail."
                        >
                        <div v-if="! email_valid" class="text-danger">Endereço de e-mail inválido</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-5 col-md-2 text-center">
                    <div @click="__validateAndSubmit()" class="btn btn-lg btn-primary btn-block btn-submit-subscription">
                        Enviar
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@stop

@section('page-javascripts')
    @include('scripts.vueFlagContestSubscribe')
@stop
