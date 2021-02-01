@extends('2017.layouts.layout')

@section('contents')
    <div class="votacao">
        <div class="text-center">
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
        </div>
    </div>
@stop
