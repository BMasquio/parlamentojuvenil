

<ul class="navbar-nav ml-auto">


    <li class="nav-item mx-0 mx-lg-1">
        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/#sobre">Sobre</a>
    </li>
    <li class="nav-item mx-0 mx-lg-1">
        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/#como-funciona">Como funciona</a>
    </li>
    <li class="nav-item mx-0 mx-lg-1">
        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/#quem-pode">Quem pode participar</a>
    </li>


    @if (config('app.subscriptions.enabled') === true)
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/inscricao">Inscreva-se</a>
        </li>
    @endif




    @if (training_enabled())
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('training.index') }}">Capacitação</a>
        </li>
    @endif

    @if (election_enabled())
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('vote.index') }}">Vote Agora</a>
        </li>
    @endif

    @if (auth()->user())
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('auth.logout') }}">Sair</a>
        </li>
    @else
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('auth.index') }}">Entrar</a>
        </li>
    @endif


    {{--<li class="nav-item mx-0 mx-lg-1">
        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#downloads">Downloads</a>
    </li>--}}
</ul>

{{--


<nav id="menu" class="menu collapse navbar-collapse">
    <ul id="headernavigation" class="menu-list nav navbar-nav">
        <li--}}
{{-- class="active"--}}{{--
><a href="#sobreopj">Sobre</a></li>
        <li><a href="#como-funciona">Como Funciona</a></li>

        @if (app()->environment() != 'production')
            <li><a href="#portfolio">Cronograma</a></li>
            <li><a href="#services">Capacitação</a></li>
            <li><a href="#latest-post">Mapa das Inscrições</a></li>
            <li><a href="#contact">Downloads</a></li>
            <li><a href="#contact">Notícias</a></li>
            <li><a href="#contact">Contato</a></li>
        @endif

    </ul>
</nav>

--}}






