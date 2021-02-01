<section id="home">
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="/templates/2016/images/slider/bg_home-3-min-min.jpg" alt="slider">

                @if (false)
                    <div class="carousel-caption">
                        <h2>Inscreva-se já para a edição 2016 </h2>
                        <h4>Participe do Parlamento Juvenil</h4>
                        <a href="/inscricao">Faça a sua inscrição <i class="fa fa-angle-right"></i></a>
                    </div>
                @elseif (false)
                    <div class="carousel-caption">
                        <h2>Inscrições encerradas!</h2>
                    </div>
                @else
                    <div class="carousel-caption">
                        <h2>Foi eleito Parlamentar Juvenil em 2016?</h2>
                        <br>
                        <a href="//www2.alerj.rj.gov.br/parlamentojuvenil/projetolei/logar.aspx" class="btn btn-lg btn-primary">Clique aqui e cadastre seu Projeto de Lei</a>
                    </div>
                @endif
            </div>
            <div class="item">
                <img class="img-responsive" src="/templates/2016/images/{{ $banner_file }}" alt="slider">
                <div class="carousel-caption">
                    <h2>Edição 2015 </h2>
                    <h4>Saiba o que aconteceu na 9ª edição</h4>
                    <a href="/">Saiba Mais <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="/templates/2016/images/slider/bg_home-4-min-min.jpg" alt="slider">
                <div class="carousel-caption">
                    <h2>Faça história com a gente<br> e mostre que você é 10!</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#home-->
