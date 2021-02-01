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
        <!-- ********** FIM - MANTIDOS DO SITE ANTIGO ********** -->

        <!-- ************* DO SITE 2019 ************* -->

        <!-- Custom fonts for this template -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- SWIPER -->
        <link rel="stylesheet" href="/templates/{{ get_current_year() }}/assets/css/swiper.min.css">

        <!-- Custom styles for this template -->
        <link href="/templates/{{ get_current_year() }}/assets/css/freelancer.min.css" rel="stylesheet">
        <!-- FONTES  -->
        <link href="/templates/{{ get_current_year() }}/assets/fonts/helvetica-neue/style.css" rel="stylesheet" type="text/css">

        <link href="/templates/{{ get_current_year() }}/assets/css/custom.css" rel="stylesheet" type="text/css">

        <link rel="shortcut icon" href="/templates/{{ get_current_year() }}/assets/img/favicon.ico">

    <!-- ********** FIM - DO SITE 2019 ********** -->

        <!-- ************* ATUALIZAÇÃO 2020 ************* -->

        <link href="/templates/2020/assets/fonts/ballon/stylesheet.css" rel="stylesheet" type="text/css">
        <link href="/templates/2020/assets/fonts/antique-olive-compact/stylesheet.css" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">


        <link href="{{elixir('css/app.css')}}" rel="stylesheet" type="text/css">

        <!-- ************* FINAL ATUALIZAÇÃO 2020 ************* -->

        <!-- ************* MANTIDOS DO SITE ANTIGO ************* -->
        <!--[if IE]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.js"></script>
        <script src="//cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>

        <script src="/js/receita.js"></script>

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
                    <img class="logo-parlamento img-fluid" src="/templates/{{ get_current_year() }}/assets/img/logo-parlamento.png">
                </a>
            </div>

            <button class="navbar-toggler navbar-toggler-right bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                @include(get_current_year().'.layouts.partials.menu')

            </div>

            <div class="col-1 pull-right logo-alerj-topo d-none d-lg-block">
                <img class="logo-alerj img-fluid" src="/templates/{{ get_current_year() }}/assets/img/logo-alerj-topo.png">
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
                    {{--<h4 class="text-uppercase mb-4">Around the Web</h4>--}}
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/parlamentojuvenilrio/">
                                <i class="fab fa-fw fa-facebook-f"></i>
                            </a>
                        </li>
{{--                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fab fa-fw fa-twitter"></i>
                            </a>
                        </li>--}}
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
                        <img src="/templates/2017/images/logo-governo.png" class="logo-governo img-fluid">
                    </p>
                </div>

                <div class="col-6  col-md-3 col-lg-2">
                    {{--<h4 class="text-uppercase mb-4">About Freelancer</h4>--}}
                    <p class="lead mb-0">
                        <img src="/templates/2017/images/logo-alerj.png" class="logo-governo img-fluid">
                    </p>
                </div>

            </div>
        </div>
    </footer>

{{--
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; 2019 Assembleia Legislativa do Estado do Rio de Janeiro</small>
        </div>
    </div>
    --}}

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="/templates/{{ get_current_year() }}/assets/js/jquery/jquery.min.js"></script>
    <script src="/templates/{{ get_current_year() }}/assets/js/bootstrap/bootstrap.bundle.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/templates/{{ get_current_year() }}/assets/js/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/templates/{{ get_current_year() }}/assets/js/freelancer.js"></script>

    <!-- Swiper JS -->
    <script src="/templates/{{ get_current_year() }}/assets/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    @yield('page-javascripts')

    @include('partials.analytics')

    </body>
</html>
