@extends('2017.layouts.layout')

@section('contents')
    @if(config('app.subscriptions.enabled'))
        @include('2017.subscriptions.page')
    @endif
@stop
