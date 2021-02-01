<nav id="menu" class="menu collapse navbar-collapse">
    <ul id="headernavigation" class="menu-list nav navbar-nav">
        <li{{-- class="active"--}}><a href="#sobreopj">Sobre</a></li>
        <li><a href="#como-funciona">Como Funciona</a></li>

        @if (app()->environment() != 'production')
            <li><a href="#portfolio">Cronograma</a></li>
            <li><a href="#services">Capacitação</a></li>
            <li><a href="#latest-post">Mapa das Inscrições</a></li>
            <li><a href="#contact">Downloads</a></li>
            <li><a href="#contact">Notícias</a></li>
            <li><a href="#contact">Contato</a></li>
        @endif

        {{--<li class="hidden-sm social-buttons"><a target="_blank" href="//www.facebook.com/parlamentojuvenilrio/"><i class="fa fa-facebook"></i></a></li>--}}
        {{--<li class="hidden-sm social-buttons ultimo"><a target="_blank" href="//www.youtube.com/user/parlamentojuvenilrj"><i class="fa fa-youtube"></i></a></li>--}}
        {{--<li class="menu-busca"><a class="" href="#contact"><i class="fa fa-search"></i></a></li>--}}
        {{--<li class="hidden-sm menu-user"><a class="" href="#contact"><i class="fa fa-user"></i></a></li>--}}
    </ul>
</nav>
