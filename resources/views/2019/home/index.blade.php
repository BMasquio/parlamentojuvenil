@extends(get_current_year().'.layouts.layout')

@section('contents')


    @include( get_current_year().'.home.partials.swiper')
    @include( get_current_year().'.home.partials.video')
    @include( get_current_year().'.home.partials.about')
    @include( get_current_year().'.home.partials.howitworks')

    @include( get_current_year().'.home.partials.whocan')


    {{--@include( get_current_year().'.home.partials.downloads')--}}

{{--    @include( get_current_year().'.home.partials.instagram')--}}



{{--
    @if (app()->environment() != 'production')
        @include( get_current_year().'.home.partials.timeline')
    @endif
    --}}

@stop
