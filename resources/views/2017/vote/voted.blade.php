@extends('2017.layouts.layout')

@section('contents')
    <div class="alert alert-success text-center" role="alert">
        <i class="fa fa-check" aria-hidden="true"></i>
        <h1 class="title-alert">Seu voto foi validado!</h1>
        <h3>Parabéns por participar do Parlamento Juvenil 2017</h3>

        <br><br><br><br>

        <h2>Alguém mais vai votar neste dispositivo? Clique no botão abaixo</h2>

        <br><br>

        <a href="/vote" class="btn btn-lg btn-danger">Votar</a>
    </div>
@stop
