@extends( get_current_year().'.layouts.layout')

@section('contents')
    @if(config('app.subscriptions.enabled'))
        @include( get_current_year().'.subscriptions.page')
    @endif
@stop
