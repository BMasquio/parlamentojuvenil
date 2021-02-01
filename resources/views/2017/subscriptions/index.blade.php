@extends('2017.layouts.layout')

@section('contents')
    <div id="subscribe" class="form-subscribe" >
        <h1>Inscreva-se no Parlamento Juvenil {{ get_current_year() }}</h1>
        @include('partials.subscribe-form')
    </div>
@stop

@section('page-javascripts')
    @include('scripts.vueSubscribe')
@stop
