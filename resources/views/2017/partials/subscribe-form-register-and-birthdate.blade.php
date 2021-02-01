@extends('2017.layouts.layout')

@section('contents')
    {{--@include('2016.partials.header-fixed')--}}




    <section id="subscribe" class="fundo-inscricao">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="subscribe-title">Insira os dados para a sua identificação:</h1>
            </div>
        </div>
        <div class="row form-subscribe-registration">
            <div class="col-md-offset-2 col-md-4 text-left">
                <form id="login" method="POST" action="{{ route('auth.student.login') }}">
                    {!! csrf_field() !!}

                    <label for="registration" class="control-label">Digite sua matrícula</label>
                    <input
                            v-model="name"
                            type="text"
                            class="form-control input-lg"
                            value="{{ Input::old('name') }}"
                            placeholder="Digite sua matrícula"
                            name="registration"
                            id="registration"
                            required data-validation-required-message="Por favor digite seu nome."
                    >
            </div>
            <div class="col-md-4 text-left">
                <label for="birthdate" class="control-label">Data de nascimento</label>
                <input
                        v-model="birthdate"
                        type="text"
                        class="form-control input-lg"
                        value="{{ Input::old('birthdate') }}"
                        placeholder="Data de nascimento"
                        name="birthdate"
                        id="birthdate"
                        required
                        data-validation-required-message="Por favor digite sua data de nascimento."
                >
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-5 col-md-2 text-center">
                <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block btn-submit-subscription">
                    Enviar
                </button>
                </form>
            </div>
        </div>

        {{--
                <form id="login" method="POST" action="{{ route('auth.student.login') }}">
                    {!! csrf_field() !!}
                    <input
                            v-model="name"
                            type="text"
                            class="form-control input-lg"
                            value="{{ Input::old('name') }}"
                            placeholder="Digite sua matrícula"
                            name="registration"
                            id="registration"
                            required data-validation-required-message="Por favor digite seu nome."
                    >
                    <input
                            v-model="birthdate"
                            type="text"
                            class="form-control input-lg"
                            value="{{ Input::old('birthdate') }}"
                            placeholder="Data de nascimento"
                            name="birthdate"
                            id="birthdate"
                            required
                            data-validation-required-message="Por favor digite sua data de nascimento."
                    >
                    <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block btn-submit-subscription">
                        Enviar
                    </button>
                </form>
        --}}
    </section>



@stop

