@extends( get_current_year().'.layouts.layout')

@section('contents')
    <div class="votacao">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                    <h1>
                        Confirmação de Voto
                    </h1>
                    <h2>
                        Você realmente deseja votar nesse candidato(a)?
                    </h2>

                    <div class="row vote card-deck mt-4">
                        <div class="offset-1 col-10 offset-md-2 col-md-8 offset-lg-4 col-lg-4">

                            <div class="card">
                                <img src="{{ $candidate->user_avatar }}" class="card-img-top foto-candidato-social">
                                <div class="card-body text-center">

                                    @if (! isset($is_elected))
                                        <p>Candidato(a)</p>
                                    @else
                                        <p>Eleito(a)</p>
                                    @endif

                                    <h5 class="card-title nome-candidato">{{ $candidate->student_name }}</h5>
                                    <p class="card-text cargo">Deputado(a) Estadual Juvenil</p>
                                    <p class="card-text escola"><small class="text-muted">{{ $candidate->student_school }}</small></p>

                                    <a href="{{ route('vote.in', ['subscription_id' => $candidate->subscription_id]) }}" class="btn btn-primary btn-large center-block">CONFIRMAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--<div class="text-center">
            <h1> Confirmação de Voto
            </h1>
            <h2>Você realmente deseja votar nesse candidato(a)?</h2>
        </div>
        <div class="row vote vote-confirmation">
            <div class="col-xs-12 col-sm-offset-3 col-sm-6 ">
                <div class="well">
                    <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                        <div class="foto-candidato-outer">
                            <div class="foto-candidato-inner" >
                                <img src="{{ $candidate->user_avatar }}" class="img-responsive foto-candidato-social">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 dados-candidato text-center">
                        <p>Candidato(a)</p>
                        <p class="nome-candidato">{{ $candidate->student_name }}</p>
                        <p class="cargo">Deputado(a) Estadual Juvenil</p>
                        <p class="escola">{{ $candidate->school_name }}</p>
                    </div>
                </div>
                <a href="{{ route('vote.in', ['subscription_id' => $candidate->subscription_id]) }}" class="btn btn-primary btn-large center-block">CONFIRMAR</a>
            </div>
        </div>--}}



    </div>



@stop
