@extends('pragmarx/sdk::html')

@section('html.head')
    <!-- jQuery -->
    <script type='text/javascript' src='//code.jquery.com/jquery-2.1.4.js'></script>
    <script type='text/javascript' src='//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js'></script>

    <!-- VueJS -->
    <script src="vendor/vue/dist/vue.min.js"></script>
    <script src="vendor/vue-resource/dist/vue-resource.min.js"></script>

    <!-- Datepicker -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/css/datepicker3.css">
    <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.js"></script>
    <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- MetisMenu CSS -->
    <link href="{{url('/')}}/vendor/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{url('/')}}/vendor/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="{{url('/')}}/vendor/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{url('/')}}/vendor/startbootstrap-sb-admin-2/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('/')}}/vendor/startbootstrap-sb-admin-2/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{url('/')}}/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="{{url('/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    {{--<!-- Datepicker -->--}}
    {{--<link href="http://eternicode.github.io/bootstrap-datepicker/bootstrap-datepicker/css/datepicker3.css" type="text/css">--}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
@stop

@section('html.body')
    @yield('body.heading')

    @yield('body.contents')

    @yield('body.footer')

    {{--<!-- jQuery -->--}}
    {{--<script src="{{url('/')}}/vendor/jquery/dist/jquery.min.js"></script>--}}

    {{--<!-- Bootstrap Core JavaScript -->--}}
    {{--<script src="{{url('/')}}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>--}}

    <!-- Morris Charts JavaScript -->
    <script src="{{url('/')}}/vendor/raphael/raphael-min.js"></script>
    <script src="{{url('/')}}/vendor/morrisjs/morris.min.js"></script>

    {{--<script src="../js/morris-data.js"></script>--}}

    <!-- Custom Theme JavaScript -->
    <script src="{{url('/')}}/vendor/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{url('/')}}/vendor/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="{{url('/')}}/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/vendor/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{url('/')}}/vendor/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js"></script>

    <!-- Pusher -->
    <script src="http://js.pusher.com/2.2/pusher.min.js"></script>

    <!-- Our Vue App -->
    <script src="js/app.js"></script>

    @yield('javascript')
@stop
