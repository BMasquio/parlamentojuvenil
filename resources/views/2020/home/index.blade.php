@extends(get_current_year().'.layouts.layout')

@section('contents')

    <div class="home-layout">


        @include( get_current_year().'.home.partials.swiper')
{{--        @include( get_current_year().'.home.partials.video')--}}
        @include( get_current_year().'.home.partials.howitworks')




        {{--        @include( get_current_year().'.home.partials.about')--}}




        @include( get_current_year().'.home.partials.whocan')



        {{--@include( get_current_year().'.home.partials.downloads')--}}
        {{--

                @if (app()->environment() != 'production')
                    @include( get_current_year().'.home.partials.timeline')
                @endif
        --}}


        @include( get_current_year().'.home.partials.instagram')

    </div>

@stop
