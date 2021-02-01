<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li class="scroll active"><a href="/#home">Início</a></li>
        <li class="scroll"><a href="/#sobre">Sobre</a></li>

        @if (false)
            <li class="scroll"><a href="/inscricao" class="external">Inscrição</a></li>
        @endif

        @if (App::environment('local'))
            <li class="scroll"><a href="/#noticias">Notícias</a></li>
        @endif

        <?php
            $now = new DateTime('now');
            $tomorrow = new DateTime('2016-10-03');
        ?>

        @if ($now >= $tomorrow)
            <li><a href="/2016/training">Capacitação</a></li>
        @endif

        @if (App::environment('local'))
            <li class="scroll"><a href="/#galeria">Galeria</a></li>
        @endif

        @if (App::environment('local'))
            <li class="dropdown">
                <!-- Link or button to toggle dropdown -->
                <a id="dLabel" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Anteriores <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li><a href="/2015">2015</a></li>
                    <li><a tabindex="-1" href="">2014</a></li>
                    <li><a tabindex="-1" href="">2013</a></li>
                    <li class="divider"></li>
                    <li><a tabindex="-1" href="">Outras Edições</a></li>
                </ul>
            </li>
        @endif

        <li class="scroll"><a href="/#downloads">Downloads</a></li>

        @if (App::environment('local'))
            <li class="scroll"><a href="/#depoimentos">Depoimentos</a></li>
        @endif

        <li class="scroll"><a href="/#contato">Contato</a></li>
    </ul>
</div>
