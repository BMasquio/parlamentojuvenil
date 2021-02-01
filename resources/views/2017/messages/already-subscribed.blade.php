@extends('2017.layouts.layout')

@section('contents')
    <div id="subscribe" class="form-subscribe" >
        <h1>Você já está inscrito!</h1>

        <div class="contact-text text-center">
            <p>Caso queira alterar algum dado, por favor, entre em contato com a gente:</p>
            <p><i class="fa fa-phone fa-fw"></i>(21) 2588-1202 / 2588-1536 - <a href="mailto:@include('partials.email')" class="already-subscribed-email">@include('partials.email')</a></p>
        </div>
    </div>
@stop
