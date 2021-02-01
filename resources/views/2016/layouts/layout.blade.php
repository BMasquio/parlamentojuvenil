<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        @yield('head-additional')

        <title>Parlamento Juvenil - ALERJ - 2016</title>

        <!-- javascript -->
        <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>

        <!-- Datepicker -->
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/css/datepicker3.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

        <!-- Google Fonts -->
        {{--<link href="//fonts.googleapis.com/css?family=Amatic+SC:400,700%7CShadows+Into+Light%7CDosis:400,200,600" rel="stylesheet" type="text/css" >--}}
        {{--<link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}
        {{--<link href='//fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>--}}
        <link href='//fonts.googleapis.com/css?family=Kreon:400,300|Palanquin+Dark' rel='stylesheet' type='text/css'>

        <!-- Blueimp Lightbox -->
        <link rel="stylesheet" type="text/css" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">


        <link href="/templates/2016/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/templates/2016/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/templates/2016/css/main.css" rel="stylesheet" type="text/css">
        <link href="/templates/2016/css/animate.css" rel="stylesheet" type="text/css">
        <link href="/templates/2016/css/responsive.css" rel="stylesheet" type="text/css">

        <!-- Pinboard -->
        <link href="/templates/2016/css/pinboard.css" rel="stylesheet" type="text/css">


        <!-- Owl Stylesheets -->
        <link rel="stylesheet" type="text/css" href="/vendor/OwlCarousel/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="/vendor/OwlCarousel/owl-carousel/owl.theme.default.min.css">

        <!-- Masonry Style -->
        <link rel="stylesheet" type="text/css" href="/css/custom.css">


        <link rel="shortcut icon" href="/templates/2016/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/templates/2016/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/templates/2016/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/templates/2016/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/templates/2016/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        @yield('contents')

        <footer id="footer">
            <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    {{--<p> Copyright  &copy;2014<a target="_blank" href="//shapebootstrap.net/"> Evento </a>Theme. All Rights Reserved. <br> Designed by <a target="_blank" href="//shapebootstrap.net/">ShapeBootstrap</a></p>--}}
                    <img src="/templates/2016/images/footer-alerj.png" alt="Alerj" class="img-responsive">
                </div>
                <div class="col-xs-12 col-md-4">
                    <img src="/templates/2016/images/footer-pje10.png" alt="Parlamento Juvenil" class="img-responsive">
                </div>
                <div class="col-xs-12 col-md-4">
                    <img src="/templates/2016/images/footer-gov-rj.png" alt="Governo do Estado do Rio de Janeiro" class="img-responsive">
                </div>
            </div>
            </div>
        </footer>
        <!--/#footer-->

        <!-- VueJS -->
        <script src="/vendor/vue/dist/vue.js"></script>
        <script src="/vendor/vue-resource/dist/vue-resource.min.js"></script>

        <!-- OWL -->
        <script src="/vendor/OwlCarousel/owl-carousel/owl.carousel.min.js"></script>

        <!-- IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Datepicker -->
        <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.js"></script>
        <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

        <!-- jQuery Plugins -->
        <script src="/js/wow.min.js"></script>
        <script src="/js/jquery.placeholder.min.js"></script>

        <!-- Masked Input -->
        <script src="/vendor/jquery.maskedinput/dist/jquery.maskedinput.min.js"></script>

        <!-- CPF -->
        {{--<script src="//www.receita.fazenda.gov.br/aplicacoes/atcta/cpf/funcoes.js"></script>--}}
        <script src="/js/receita.js"></script>

        <!-- Blueimp Lightbox -->
        <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>

        <!-- jQuery Lazyload -->
        <script type="text/javascript" src="/vendor/lazyload/dist/lazyload.min.js"></script>

        <!-- Masonry -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
        <script src="//imagesloaded.desandro.com/imagesloaded.pkgd.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        {{--<script type="text/javascript" src="/templates/2016/js/bootstrap.min.js"></script>--}}
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/templates/2016/js/smoothscroll.js"></script>
        <script type="text/javascript" src="/templates/2016/js/jquery.parallax.js"></script>
        {{--<script type="text/javascript" src="/templates/2016/js/coundown-timer.js"></script>--}}
        <script type="text/javascript" src="/templates/2016/js/jquery.scrollTo.js"></script>
        <script type="text/javascript" src="/templates/2016/js/jquery.nav.js"></script>

        <!-- Pusher -->
        <script src="//js.pusher.com/3.1/pusher.min.js"></script>

        @if (isset($isHome) && $isHome)
            <script type="text/javascript" src="/templates/2016/js/main.js"></script>
        @endif

        @include('scripts.all')

        @yield('javascript')

        <script>
            loadPusher();
        </script>

        @include('partials.analytics')
    </body>
</html>
