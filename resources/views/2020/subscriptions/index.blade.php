@extends(config('app.year').'.layouts.layout')

@section('contents')
    <div id="subscribe" class="form-subscribe" >
        <h1>Inscreva-se no Parlamento Juvenil {{ config('app.year') }}</h1>
        @include('partials.subscribe-form')
    </div>
@stop

@section('page-javascripts')
    @include('scripts.vueSubscribe')
@stop
