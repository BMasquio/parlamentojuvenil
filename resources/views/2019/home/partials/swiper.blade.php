<!-- Header -->





<header class="text-center swiper">
    <div class="container">
        <div class="row">


        @if(billing_enabled())
           <div class="col-md-7 col-lg-8 text-left subscribe-banner-txt">
                <h2>Você foi eleito Parlamentar Juvenil de 2019?</h2>
                <br>
                <a href="http://www2.alerj.rj.gov.br/parlamentojuvenil/projetolei/logar.aspx" class="btn btn-lg btn-primary">Clique aqui e cadastre seu Projeto de Lei</a>
            </div>
        @endIf


        @if (training_enabled())
            <div class="col-md-7 col-lg-8 text-left subscribe-banner-txt">
                <br>
                <h3 class="">Prezados(as) Parlamentares Juvenis da Edição de {{ get_current_year() }},</h3>

                <br>
                <p class="lead">
                    No decorrer das próximas duas semanas vocês terão a oportunidade de ampliar seus conhecimentos aprendendo um pouco sobre técnica legislativa, instrumento essencial para orientá-los (as) na construção do seus projetos de lei.
                </p>
                <p class="lead">
                    A capacitação on-line é uma atividade fundamental para aprimorar os seus desempenhos na etapa de capacitação presencial.
                </p>
                <p class="lead">
                    A capacitação on-line será dividida em dois módulos semanais compostos de videoaula e questionário.
                </p>
                <p class="lead">
                    Para conclusão de cada módulo é necessário que vocês assistam a videoaula e preencham o formulário final que os habilitará a realizar o próximo módulo.

                </p>


                <a class="btn btn-primary btn-lg" href="/training" role="button">  <i class="fas fa-chalkboard-teacher"></i>Iniciar Capacitação </a>
            </div>

            <div class="d-none d-md-block col-md-5 col-lg-4 subscribe-banner-img ">
                <img src="/templates/{{ get_current_year() }}/assets/img/seminar.png" class="img-fluid">
            </div>
        @endIf






        @if (config('app.subscriptions.enabled') === true)
                <div class="col-md-6 col-lg-8 text-left subscribe-banner-txt">
                    <h3 class="">Inscrições Abertas</h3>

                    <p class="lead">Até 7 de junho</p>
                    <p class="lead">Estudantes do 1&deg; e do 2&deg; anos do Ensino Médio da Rede Estadual com idade entre 14 e 17 anos.</p>

                    <p class="lead">Importante!<br> Tenha o número de sua matrícula em mãos.</p>

                    <a class="btn btn-primary btn-lg" href="/inscricao" role="button">  <i class="fas fa-plus-circle"></i> Inscreva-se Aqui! </a>
                </div>


                <div class="col-md-6 col-lg-4 subscribe-banner-img ">
                    <img src="/templates/{{ get_current_year() }}/assets/img/subscribe.png" class="img-fluid">
                </div>
            @endif


            @if (election_enabled())


            <!-------Banner da votação Ativa------->
                {{--
            <div class="d-none d-md-block col-md-5 col-lg-4 subscribe-banner-img ">
                <img src="/templates/{{ get_current_year() }}/assets/img/vote.png" class="img-fluid">
            </div>

            <div class="col-md-7 col-lg-8 text-left subscribe-banner-txt">
                <h3 class="">Votação do Segundo Turno</h3>

                --}}{{--<p class="lead">Até 7 de junho</p>--}}{{--<br>
                <p class="lead">Já está aberta a votação para o Segundo Turno do Parlamento Juvenil</p>

                <br> &nbsp;<br> &nbsp;<br>

                <a class="btn btn-primary btn-lg"  href="{{ route('vote.index') }}" role="button">  <i class="fas fa-plus-circle"></i> Vote Aqui </a>
            </div>

            --}}


            <!-------Banner da votação Suplementar------->

            {{--
                    <div class="d-none d-md-block col-md-5 col-lg-4 subscribe-banner-img ">
                        <img src="/templates/{{ get_current_year() }}/assets/img/vote.png" class="img-fluid">
                    </div>

                    <div class="col-md-7 col-lg-8 text-left subscribe-banner-txt">
                        <h3 class="">Votação do Suplementar</h3>

                        <br>
                        <p class="lead">Esta aberta a votação suplementar para o Segundo Turno dos municípios de Itaperuna e Valença</p>

                        <br> &nbsp;<br> &nbsp;<br>

                        <a class="btn btn-primary btn-lg"  href="{{ route('vote.index') }}" role="button">  <i class="fas fa-plus-circle"></i> Vote Aqui </a>
                    </div>
                --}}
            @endif



        <!-------Banner de Resultados da Votação do Segundo Turno------->
            {{--

                <div class="d-none d-md-block col-md-5 col-lg-4 subscribe-banner-img ">
                    <img src="/templates/{{ get_current_year() }}/assets/img/results.png" class="img-fluid">
                </div>

                <div class="col-md-7 col-lg-8 text-left subscribe-banner-txt">
                    <br>
                    <h3 class="">Resultados da Votação do Segundo Turno</h3>

                    <br>
                    <p class="lead">Conheça os Deputados Estaduais Juvenis de {{ get_current_year() }}</p>

                    <br> &nbsp;<br> &nbsp;

                    <a class="btn btn-primary btn-lg"  href="{{ route('vote.elected', ['round' => 2]) }}" role="button">  <i class="fas fa-plus-circle"></i> Conheça os Deputados Eleitos </a>
                </div>
--}}


        <!-------Banner de Resultados da Votação - RESULTADOS FINAIS------->

            {{--
                <div class="col-md-7 col-lg-8 text-left subscribe-banner-txt">
                    <br>
                    <h3 class="">Resultados Finais </h3>

                    <br>
                    <p class="lead">Baixe Aqui o Resultado Final da Eleição do Parlamento Juvenil {{ get_current_year() }}</p>

                    <br> &nbsp;<br> &nbsp;

                    <a class="btn btn-primary btn-lg" href="/templates/2019/assets/media/resultado-final-pj-2019.pdf" target="_blank" role="button">  <i class="fas fa-download"></i></i> Baixar Resultados </a>
                </div>

                <div class="d-none d-md-block col-md-5 col-lg-4 subscribe-banner-img ">
                    <img src="/templates/{{ get_current_year() }}/assets/img/results.png" class="img-fluid">
                </div>
--}}











        </div>





    </div>
</header>






<!-- Swiper -->

<!--
<header class="masthead bg-pattern text-center swiper">

    <div class="swiper-container pt-5">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-md-4 text-left">
                        <h3 class="">Mas que história é essa?</h3>

                        <p class="lead"> O Parlamento Juvenil da ALERJ é dos primeiros projetos do Brasil que simula com os jovens o funcionamento do Legislativo.</p>
                        <p class="lead"> Criado em 1998 e reformulado pelos próprios Parlamentares Juvenis em 2015, chega em 2019 à sua 12&ordf; edição.</p>

                        <a class="btn btn-primary" href="#" role="button"><i class="fas fa-plus-circle"></i> Saiba Mais</a>
                    </div>

                    <div class="col-md-8">
                        <img src="/templates/{{ get_current_year() }}/assets/img/site2016-mockup.png" class="img-fluid"><br>
                        imagem do site da edição de 2016
                    </div>
                </div>
            </div>


{{--
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-md-7">
                        <img src="/templates/{{ get_current_year() }}/assets/img/subscribe.png" class="img-fluid">
                    </div>
                    <div class="col-md-5 text-right">
                        <h3 class="">Inscreva-se Aqui!</h3>
                        <p class="lead">Até 7 de junho</p>
                        <p class="lead">Estudantes do 1&deg; e do 2&deg; anos do Ensino Médio da Rede Estadual com idade entre 14 e 17 anos.</p>

                        <p class="lead">Importante!<br> Tenha o número de sua matrícula em mãos.</p>


                        <a class="btn btn-primary" href="#" role="button"><i class="fas fa-plus-circle"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>--}}




{{--

            <div class="swiper-slide">
                <div class="row">
                    <div class="col-md-8">
                        <img src="/templates/{{ get_current_year() }}/assets/img/calendario001.png" class="img-fluid">
                    </div>
                    <div class="col-md-4 text-right">
                        <h3 class="">Calendário 2019 </h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        <p class="lead">Morbi quis sollicitudin magna, accumsan euismod lorem. Suspendisse vestibulum tristique nisi a blandit. Fusce vel arcu non arcu pretium blandit. Fusce vitae risus vitae purus semper semper rhoncus et sapien. </p>

                        <a class="btn btn-primary" href="#" role="button"><i class="fas fa-plus-circle"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
--}}

{{--
<div class="swiper-slide">Slide 3</div>
<div class="swiper-slide">Slide 4</div>
<div class="swiper-slide">Slide 5</div>
<div class="swiper-slide">Slide 6</div>
<div class="swiper-slide">Slide 7</div>
<div class="swiper-slide">Slide 8</div>
<div class="swiper-slide">Slide 9</div>
<div class="swiper-slide">Slide 10</div>
--}}

        </div>

        <div class="swiper-pagination"></div>
    </div>

</header> ---->
