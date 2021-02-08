<!doctype html>
<html lang="en">
    <head>

        <!-- ************* MANTIDOS DO SITE ANTIGO ************* -->
        <meta charset="UTF-8">
        <title>Parlamento Juvenil {{ get_current_year() }}</title>
        <meta name="description" content="Parlamento Juvenil {{ get_current_year() }}">
        <meta name="author" content="Alerj | SDGI | Projetos Esperciais">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->

        <link rel="shortcut icon" href="/2020/img/favicon.ico">
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">


        <script src="{{mix('js/app.js')}}"></script>

        <script>
            window.laravel = {year: '{{ get_current_year() }}'};
        </script>
        <!-- ********** FIM - MANTIDOS DO SITE ANTIGO ********** -->

    </head>

    <body class="noScroll" id="page-top">

    @include( get_current_year().'.layouts.partials.variables')

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary header-bg fixed-top " id="mainNav">

        <div class="container-fluid">
            <div class="col-6 offset-3 col-md-6 col-lg-2 offset-lg-1">
                <a class="navbar-brand js-scroll-trigger" href="/#page-top">
                    <img class="logo-parlamento img-fluid" src="/2020/img/logo-parlamento.png">
                </a>
            </div>

            <button class="navbar-toggler navbar-toggler-right bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                @include(get_current_year().'.layouts.partials.menu')

            </div>

            <div class="col-1 pull-right logo-alerj-topo d-none d-lg-block">
                <img class="logo-alerj img-fluid" src="/2020/img/logo-alerj-topo.png">
                <div class="edicao2020 text-center"> EDIÇÃO 2020 </div>
            </div>
        </div>
    </nav>

        <div class="masthead">

            <div class="container">
                @include('partials.errors')
            </div>

            @yield('contents')
        </div>

    <!-- Footer -->
    <footer class="footer copyright text-center">
        <div class="container">
            <div class="row d-flex align-items-center bd-highlight ">

                <div class="col-md-5 col-lg-3 mb-5 mb-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/parlamentojuvenilrio/">
                                <i class="fab fa-fw fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.instagram.com/parlamentojuvenilrj/">
                                <i class="fab fa-fw fa-instagram"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.youtube.com/user/parlamentojuvenilrj">
                                <i class="fab fa-fw fa-youtube"></i>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="col-md-7 col-lg-5 mb-5 mb-lg-0">
                    {{--<h4 class="text-uppercase mb-4">Location</h4>--}}
                    <p class="lead mb-0">
                        @include('partials.phone')

                        <br>  <a href="mailto:@include('partials.email')">@include('partials.email')</a></p>
                </div>

                <div class="col-6 offset-md-3 col-md-3 offset-lg-0 col-lg-2">
                    {{--<h4 class="text-uppercase mb-4">About Freelancer</h4>--}}
                    <p class="lead mb-0">
                        <img src="/2020/img/logo-governo.png" class="logo-governo img-fluid">
                    </p>
                </div>

                <div class="col-6  col-md-3 col-lg-2">
                    {{--<h4 class="text-uppercase mb-4">About Freelancer</h4>--}}
                    <p class="lead mb-0">
                        <img src="/2020/img/logo-alerj.png" class="logo-governo img-fluid">
                    </p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    @yield('page-javascripts')

    @include('partials.analytics')

    </body>
</html>
