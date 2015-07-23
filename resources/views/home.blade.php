@extends('templates.layout')

@section('contents')
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-1x fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <!--  Optional: close button
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-2x fa-times"></i></a> -->
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#top">Parlamento Juvenil</i></a>
            </li>
            <li>
                <a href="#top">Início</a>
            </li>
            <li>
                <a href="#about">Sobre</a>
            </li>
            {{--<li>--}}
                {{--<a href="#services">Services</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#case-study">Case Study</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#portfolio">Portfolio</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#testimonials">Testimonials</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#contact">Contact</a>--}}
            {{--</li>--}}
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                        <img src="files/apps/parlamentojuvenil/site/logoalerj.png" alt="ALERJ" />
                        <br/><br/>

                        <h1>Parlamento Juvenil <label class="label label-danger label-small">2015</label></h1>
                        <h2><i class="fa fa-calendar"></i> 22 a 28 de Novembro</h2>
                        <p>Participe, torne-se um parlamentar!</p>

                        <h1>
                            <i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-instagram"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h1>
                    </div>

                    <div class="col-md-4 col-md-offset-1">
                        <h2>Inscreva-se</h2>
                        <p>Alunos da Rede Estadual de Ensino</p>

                        @include('partials.subscribe')

                        <br>
                        <br>
                        {{--<div class="pull-right">--}}
                            {{--<img src="files/apps/parlamentojuvenil/site/logogoverno.png" alt=""/>--}}
                        {{--</div>--}}
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <!-- mouse -->
                   <span class="scroll-btn hidden-xs wow fadeInDownBig">
                       <a href="#about"><span class="mouse"><span></span></span></a>
                   </span>
                <!-- mouse -->
            </div>
        </div>
    </header>

    @include('partials.about')

    @include('partials.news')

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

    <!-- callout -->
    <section class="callout">
        <div class="container-fluid text-vertical text-center">
            <div class="col-sm-10 col-sm-offset-1 wow fadeInDownBig">
                <i class="fa fa-5x fa-h-square"></i><br>
                <h2 class="heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus illo illum nobis.</p>
                <div class="row"><a href="https://wrapbootstrap.com/theme/hybrid-multipurpose-landing-page-WB0N64HDJ" class="btn border-button">DOWNLOAD LOREM <i class="fa fa-power-off"></i></a></div>
            </div>
        </div>
    </section>

    <!-- case-study -->
    <section id="case-study" class="head">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center wow fadeIn">
                    <h2 class="heading">Lorem Ipsum</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolores esse nesciunt ullam veritatis? Ad, magni, repudiandae?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="case-study">
        <div class="container-fluid">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-sm-12 wow fadeIn" data-wow-delay=".2s">
                                    <h3><i class="fa fa-desktop fa-lg"></i> Lorem Ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis magni mollitia quaerat, quia quidem tempore veniam!<br>
                                        Lorem: <strong><a href="#">Lorem Ipsum</a></strong>
                                        Ipsum: <strong>20 Lorem</strong>
                                        Amet: <strong>Lorem Ipsum</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 wow fadeIn" data-wow-delay=".2s">
                                    <h3><i class="fa fa-desktop fa-lg"></i> Lorem Ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis magni mollitia quaerat, quia quidem tempore veniam!<br>
                                        Lorem: <strong><a href="#">Lorem Ipsum</a></strong>
                                        Ipsum: <strong>20 Lorem</strong>
                                        Amet: <strong>Lorem Ipsum</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 wow fadeIn" data-wow-delay=".2s">
                                    <h3><i class="fa fa-desktop fa-lg"></i> Lorem Ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis magni mollitia quaerat, quia quidem tempore veniam!<br>
                                        Lorem: <strong><a href="#">Lorem Ipsum</a></strong>
                                        Ipsum: <strong>20 Lorem</strong>
                                        Amet: <strong>Lorem Ipsum</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-lg-offset-1 hidden-sm img-case-study-greed text-center wow fadeInRight">
                            <img src="files/apps/parlamentojuvenil/site/app2.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.portfolio', ['edition' => 7])

    @include('partials.portfolio', ['edition' => 8])

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

    @include('partials.carousel')

    <!-- sponsors -->
    <div id="sponsor">
        <div class="container-fluid">
            <div class="row sponsor text-center wow fadeInLeftBig">
                <div class="col-md-2 gray col-md-offset-1">
                    <a href="/"><img src="files/apps/parlamentojuvenil/site/logo1.png" alt=""></a>
                </div>
                <div class="col-md-2 gray">
                    <a href="/"><img src="files/apps/parlamentojuvenil/site/logo2.png" alt=""></a>
                </div>
                <div class="col-md-2 gray">
                    <a href="/"><img src="files/apps/parlamentojuvenil/site/logo3.png" alt=""></a>
                </div>
                <div class="col-md-2 gray">
                    <a href="/"><img src="files/apps/parlamentojuvenil/site/logo4.png" alt=""></a>
                </div>
                <div class="col-md-2 gray">
                    <a href="/"><img src="files/apps/parlamentojuvenil/site/logo5.png" alt=""></a>
                </div>

            </div>
        </div>
    </div>

    <!-- contacts -->
    <div id="contact">
        <div class="container-fluid overlay text-center">
            <div class="col-md-6 col-md-offset-3 wow fadeIn">
                <h2 class="heading">Entre Em Contato</h2>
                <h2><i class="fa fa-phone fa-fw"></i>(21) 2456-7890</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam commodi delectus doloribus ea esse fugit hic inventore laudantium, maiores nam natus numquam, officia quo ratione reiciendis, reprehenderit sequi tempora.</p>
                <ul class="list-inline">
                    <li>
                        <a href="/"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                    </li>
                    <li>
                        <a href="/"><i class="fa fa-facebook fa-2x  fa-fw"></i></a>
                    </li>
                    <li>
                        <a href="/"><i class="fa fa-youtube fa-2x  fa-fw"></i></a>
                    </li>
                    <li>
                        <a href="/"><i class="fa fa-envelope-o fa-2x  fa-fw"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop
