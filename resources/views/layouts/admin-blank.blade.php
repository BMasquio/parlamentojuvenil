@extends('layouts.html')

@section('html.head')
    <script src="{{mix('js/admin.js')}}"></script>

    <!-- Datepicker -->

{{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/css/datepicker3.css">--}}
{{--    <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.js"></script>--}}
{{--    <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>--}}

    <!-- Bootstrap Core CSS -->
{{--    <script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>--}}
{{--    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">--}}


    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    {{--<!-- Datepicker -->--}}
    {{--<link href="//eternicode.github.io/bootstrap-datepicker/bootstrap-datepicker/css/datepicker3.css" type="text/css">--}}

    <link href="{{mix('css/admin.css')}}" rel="stylesheet" type="text/css">

    <script>
        window.laravel = {token: '{{ csrf_token() }}'};
    </script>
@stop

@section('html.body')
    @yield('body.heading')

    @yield('body.contents')

    @yield('body.footer')

    {{--<!-- jQuery -->--}}
    {{--<script src="{{url('/')}}/vendor/jquery/dist/jquery.min.js"></script>--}}

    {{--<!-- Bootstrap Core JavaScript -->--}}
    {{--<script src="{{url('/')}}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>--}}

    <!-- Pusher -->
    <script src="//js.pusher.com/2.2/pusher.min.js"></script>

    <!-- Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/locale/pt-br.js"></script>

    @yield('javascript')

    @yield('page-javascripts')

    @include('scripts.all',  ['exceptFiles' => ['owl' => 1, 'pinboard' => 2]])

    <script>
        /// We are using pusher only on the admin site

        loadPusher();
    </script>

    @include('partials.analytics')
@stop
