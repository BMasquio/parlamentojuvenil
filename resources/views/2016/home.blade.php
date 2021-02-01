@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header')

    @include('2016.partials.heading')

    @include('2016.partials.subscribe')

    @include('2016.partials.about')

    @include('2016.partials.video')

    @include('2016.partials.map')

    @include('2016.partials.timeline')

    @if (App::environment('local'))
        @include('2016.partials.news', ['articles' => $newArticles, 'first' => 1, 'last' => 6])
    @endif

{{--
    @if (App::environment('local'))
        @include('2016.partials.congressmen')
    @endif
--}}

    @if (App::environment('local'))
        @include('2016.partials.gallery')
    @endif

    @include('2016.partials.downloads')

    @include('2016.partials.testimonials')

    @include('2016.partials.contact')
@stop
