@extends('layouts.layout')

@section('contents')
    @include('partials.navigation')

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                        <img src="files/apps/parlamentojuvenil/site/logoalerj.svg" height="80px" alt="ALERJ" />
                        <br/><br/><br/>

                        <img src="files/apps/parlamentojuvenil/site/parlamentojuvenil9.png" alt="">

                        <h2><i class="fa fa-calendar"></i> 22 a 28 de novembro</h2>
                        <p>Tem um lugar na história para você</p>

                        <div>
                            <a href="https://www.facebook.com/parlamentojuvenilrio"><img src="files/apps/parlamentojuvenil/site/facebook-icon.svg" height="35px" alt=""></a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="https://www.youtube.com/parlamentojuvenilrj"><img src="files/apps/parlamentojuvenil/site/youtube-icon.svg" height="35px" alt=""></a>
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-1">
                        @if (config('app.debug'))
                            @include('partials.subscribe')
                        @elseif ($now > '2015-11-19 23:59:59' && !$force)
                            @include('partials.legislative-process-ended')
                        @elseif ($now > '2015-10-12 23:59:59' && !$force)
                            @include('partials.deputy-entrance')
                        @elseif ($now > '2015-08-31 23:59:59' && !$force)
                            @include('partials.subscriptions-ended')
                        @else
                            @include('partials.subscribe')
                        @endif

                        <p class="pull-right">
                            <br>
                            <img src="files/apps/parlamentojuvenil/site/logogoverno.svg" height="70px" alt=""/>
                        </p>
                    </div>
                </div>
                <!-- mouse -->
                   <span class="scroll-btn hidden-xs wow fadeInDownBig">
                       <a href="/#about"><span class="mouse"><span></span></span></a>
                   </span>
                <!-- mouse -->
            </div>
        </div>
    </header>

    @include('partials.video')

    @include('partials.about')

    @include('partials.download')

    @include('partials.news', ['articles' => $newArticles])

    {{--@include('partials.oldNews', ['articles' => $oldArticles])--}}

    {{--<!-- call-to-action -->--}}
    {{--<div class="call-to-action">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="col-lg-5 col-lg-offset-1">--}}
                {{--<div id="carousel-call-to-action" class="carousel slide" data-ride="carousel">--}}
                    {{--<!-- Indicators -->--}}
                    {{--<ol class="carousel-indicators">--}}
                        {{--<li data-target="#carousel-call-to-action" data-slide-to="0" class="active"></li>--}}
                        {{--<li data-target="#carousel-call-to-action" data-slide-to="1"></li>--}}
                        {{--<li data-target="#carousel-call-to-action" data-slide-to="2"></li>--}}
                    {{--</ol>--}}
                    {{--<!-- Wrapper for slides -->--}}
                    {{--<div class="carousel-inner" role="listbox">--}}
                        {{--<div class="item active">--}}
                            {{--<div class="carousel-caption">--}}
                                {{--<h2 class="heading">Lorem ipsum dolor.</h2>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores earum, rerum. Ab asperiores, at atque aut delectus, exercitationem illum impedit natus neque nesciunt pariatur possimus rem reprehenderit ut, veniam. Accusamus aperiam atque cumque eum exercitationem libero mollitia pariatur, rem unde voluptatibus! Aperiam beatae fugiat id nostrum praesentium quasi saepe velit.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="carousel-caption">--}}
                                {{--<h1>Lorem ipsum.</h1>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci dicta distinctio doloremque itaque modi pariatur perferendis quis, voluptas. Aliquam aut corporis delectus enim quae quod veniam voluptas voluptatem! Ipsa ipsam laudantium quisquam vero. Corporis cupiditate dolorum possimus repellat suscipit!</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="carousel-caption">--}}
                                {{--<h2 class="heading">Lorem ipsum dolor sit.</h2>--}}
                                {{--<p>Seo Optimized, very lightweight code based on bootstrap. Easy to use and fast loading. Responsive layout, optimized for high conversion. Clean design focused on good readability.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3 col-lg-offset-2 text-center wow fadeIn">--}}
                {{--<br><i class="fa fa-5x fa-h-square"></i><br>--}}
                {{--<a href="https://wrapbootstrap.com/theme/hybrid-multipurpose-landing-page-WB0N64HDJ" class="btn border-button">DOWNLOAD LOREM <i class="fa fa-power-off"></i></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    @include('partials.newspapers')

    <div id="vue-gallery">
        @include('partials.gallery')

        @include('partials.gallery-old')
    </div>

    @include('partials.carousel')

    @include('partials.portfolio', ['edition' => 7, 'caption' => 'VII'])

    @include('partials.portfolio', ['edition' => 8, 'caption' => 'VIII'])

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <i class="fa fa-times fa-3x fa-fw"></i>
            </div>
            <div class="modal-body">
                <h2>Project Title</h2>
                <hr>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://player.vimeo.com/video/113287920" allowfullscreen></iframe>
                </div>
                <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
                <ul class="list-inline item-details">
                    <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                    <li>Date: <strong><a href="#">April 2015</a></strong></li>
                    <li>Service: <strong><a href="#">Web Development</a></strong></li>
                </ul>
                <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <i class="fa fa-times fa-3x fa-fw"></i>
            </div>
            <div class="modal-body">
                <h2>Project Title</h2>
                <hr>
                <img src="img/5.jpg" class="img-responsive img-centered" alt="">
                <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
                <ul class="list-inline item-details">
                    <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                    <li>Date: <strong><a href="#">April 2015</a></strong></li>
                    <li>Service: <strong><a href="#">Web Development</a></strong></li>
                </ul>
                <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <i class="fa fa-times fa-3x fa-fw"></i>
            </div>
            <div class="modal-body">
                <h2>Project Title</h2>
                <hr>
                <img src="img/8.jpg" class="img-responsive img-centered" alt="">
                <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
                <ul class="list-inline item-details">
                    <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                    <li>Date: <strong><a href="#">April 2015</a></strong></li>
                    <li>Service: <strong><a href="#">Web Development</a></strong></li>
                </ul>
                <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <i class="fa fa-times fa-3x fa-fw"></i>
            </div>
            <div class="modal-body">
                <h2>Project Title</h2>
                <hr>
                <img src="img/7.jpg" class="img-responsive img-centered" alt="">
                <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
                <ul class="list-inline item-details">
                    <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                    <li>Date: <strong><a href="#">April 2015</a></strong></li>
                    <li>Service: <strong><a href="#">Web Development</a></strong></li>
                </ul>
                <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <i class="fa fa-times fa-3x fa-fw"></i>
            </div>
            <div class="modal-body">
                <h2>Project Title</h2>
                <hr>
                <img src="img/6.jpg" class="img-responsive img-centered" alt="">
                <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
                <ul class="list-inline item-details">
                    <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                    <li>Date: <strong><a href="#">April 2015</a></strong></li>
                    <li>Service: <strong><a href="#">Web Development</a></strong></li>
                </ul>
                <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <i class="fa fa-times fa-3x fa-fw"></i>
            </div>
            <div class="modal-body">
                <h2>Project Title</h2>
                <hr>
                <img src="img/2.jpg" class="img-responsive img-centered" alt="">
                <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
                <ul class="list-inline item-details">
                    <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                    <li>Date: <strong><a href="#">April 2015</a></strong></li>
                    <li>Service: <strong><a href="#">Web Development</a></strong></li>
                </ul>
                <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <i class="fa fa-times fa-3x fa-fw"></i>
            </div>
            <div class="modal-body">
                <h2>Project Title</h2>
                <hr>
                <img src="img/4.jpg" class="img-responsive img-centered" alt="">
                <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
                <ul class="list-inline item-details">
                    <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                    <li>Date: <strong><a href="#">April 2015</a></strong></li>
                    <li>Service: <strong><a href="#">Web Development</a></strong></li>
                </ul>
                <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>

    <!-- sponsors -->
    <div id="sponsor">
        <div class="container-fluid">
            <div class="row sponsor text-center wow fadeInLeftBig">
                <div class="col-md-2 gray col-md-offset-1">
                    <a href="/"><img src="files/apps/parlamentojuvenil/site/logoalerj-positivo.svg" height="35px" alt=""></a>
                </div>
                <div class="col-md-2 gray">

                </div>
                <div class="col-md-2 gray">
                    <a href="/"><img src="files/apps/parlamentojuvenil/site/logoparlamento.svg" height="35px" alt=""></a>
                </div>
                <div class="col-md-2 gray">

                </div>
                <div class="col-md-2 gray">
                    <a href="/"><img src="files/apps/parlamentojuvenil/site/logogoverno-positivo.svg" height="35px" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <!-- contacts -->
    <div id="contact">
        <div class="container-fluid overlay text-center">
            <div class="col-md-6 col-md-offset-3 wow fadeIn">
                <h2 class="heading">Entre em contato</h2>
                <h2><i class="fa fa-phone fa-fw"></i>(21) 2588-1202 / 2588-1536</h2>
                <h2><a href="mailto:@include('partials.email')">@include('partials.email')</a></h2>
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/parlamentojuvenilrio"><img src="files/apps/parlamentojuvenil/site/facebook-icon.svg" height="35px" alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/parlamentojuvenilrj"><img src="files/apps/parlamentojuvenil/site/youtube-icon.svg" height="35px" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

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
                            <i class="fa fa-chevron-left"></i>
                            Anterior
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Próxima
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    @include('scripts.all')
@stop
