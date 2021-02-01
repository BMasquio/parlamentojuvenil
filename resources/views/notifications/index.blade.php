@extends('layouts.selector')

@section('body.contents')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @include('notifications.notification-body')
        </div>
    </div>
@stop
