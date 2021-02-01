<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Parlamento Juvenil - ALERJ</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Custom CSS -->
        <link href="css/hybrid.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet">

        <!-- Datepicker -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/css/datepicker3.css">
        <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.js"></script>
        <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

        <!-- Custom Fonts -->
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="packages/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="packages/owl.carousel/assets/owl.theme.default.min.css">

        <!-- Fonts -->
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <!-- Blueimp Lightbox -->
        <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">

        <!-- IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        @yield('contents')

        @yield('footer')

        <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery">
            <!-- The container for the modal slides -->
            <div class="slides"></div>
            <!-- Controls for the borderless lightbox -->
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
            <!-- The modal dialog, which will be used to wrap the lightbox content -->
            <div class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body next"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left prev">
                                <i class="glyphicon glyphicon-chevron-left"></i>
                                Anterior
                            </button>
                            <button type="button" class="btn btn-primary next">
                                Next
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- owl -->
        <script type="text/javascript" src="packages/owl.carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="vendor/jquery-mousewheel/jquery.mousewheel.min.js"></script>

        <!-- VueJS -->
        <script src="vendor/vue/dist/vue.min.js"></script>
        <script src="vendor/vue-resource/dist/vue-resource.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- jQuery Plugins -->
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.placeholder.min.js"></script>

        <!-- Masked Input -->
        <script src="vendor/jquery.maskedinput/dist/jquery.maskedinput.min.js"></script>

        <!-- CPF -->
        <script src="//www.receita.fazenda.gov.br/aplicacoes/atcta/cpf/funcoes.js"></script>

        <!-- Blueimp Lightbox -->
        <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>

        <!-- jQuery Lazyload -->
        <script type="text/javascript" src="vendor/lazyload/dist/lazyload.min.js"></script>

        <!-- Custom Theme JavaScripts -->
        <script src="js/hybrid.js"></script>

        <!-- App.JS -->
        <script src="js/app.js"></script>

        <!-- Masonry -->
        <script src="https://unpkg.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>--}}
        <script src="https://unpkg.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
        {{--<script src="//imagesloaded.desandro.com/imagesloaded.pkgd.min.js"></script>--}}

        @yield('javascript')

        @include('partials.analytics')
    </body>
</html>
