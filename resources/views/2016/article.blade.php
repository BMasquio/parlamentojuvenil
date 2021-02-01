@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header')

{{--    <section id="home">
        <div id="main-slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="/templates/2016/images/edicoes/vix/banner_vix.jpg" alt="slider">
                </div>
            </div>
        </div>
    </section>--}}

    <section id="article" class="fundo-azul article">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 text-center">
                    <h2>Últimas Notícias</h2>
                </div>
            </div>
        </div>

        {{--<div class="col-xs-12 col-md-8 quadro-amarelo texto-preto" id="article_{{ $article['id'] }}">
            <div class="titulo borda-preta text-center">{{ $article['heading'] }}</div>

            <div class="thumbnail">
                <a href="#">
                    <img src="{!! make_image_url($article['image']) !!}" alt="">
                </a>
            </div>

            <div class="col-xs-12 quadro-branco borda-preta-lateral texto-preto">
                {{ $article['date'] }}

                @if ($article['subheading'])
                    - {{ $article['subheading'] }}
                @endif

                <div>
                    {!! $article['short_body'] !!}

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis viverra leo vitae facilisis. Nullam porttitor molestie sem in semper. Nunc purus leo, lacinia vel risus sit amet, finibus sodales metus. Integer vestibulum consectetur felis auctor ullamcorper. Sed vestibulum ex ac malesuada efficitur. Duis eget purus dignissim tellus rutrum posuere ut ut libero. In ac porttitor ex.
                    </p>
                    <p>
                        Etiam vel eros interdum, ultrices quam ac, mollis ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam hendrerit erat lectus, sit amet ultrices magna efficitur vel. Fusce venenatis ligula est, non gravida purus condimentum in. Vestibulum ornare elit lacinia, suscipit ligula at, viverra sem. Fusce ac egestas turpis. Etiam non dui magna. Proin tristique, libero nec vestibulum ultrices, diam velit placerat magna, sed faucibus magna eros sagittis nibh. Ut eget purus sed nisi cursus rhoncus.
                    </p>
                    <p>
                        Suspendisse sagittis urna neque, vitae porttitor justo mattis nec. Aenean porta nisi urna, vitae blandit libero lacinia sit amet. Curabitur facilisis, velit sed interdum pellentesque, tellus tellus aliquam velit, in accumsan tortor tortor ut lacus. Ut dapibus quis velit et auctor. Nullam tempor felis nisi, nec malesuada neque semper et. Nulla convallis orci non arcu imperdiet, lobortis ullamcorper quam tristique. Proin tincidunt massa id metus finibus, id porta ex sagittis. Suspendisse vel urna velit. Sed sed est erat. Vestibulum ultricies quis risus in vestibulum. Cras eu convallis nibh. Aenean consectetur enim ac nulla sollicitudin maximus. In hac habitasse platea dictumst. Donec porta magna quam, sit amet aliquet lorem ornare a. Donec vitae nisi sed lorem vestibulum finibus.
                    </p>
                    <p>
                        Quisque auctor vestibulum orci eu egestas. Vivamus et varius sem. In lacinia tortor ullamcorper lacus consequat venenatis. Aenean sapien nisi, faucibus et lacus nec, cursus congue lorem. Quisque sed est vitae urna efficitur interdum varius ut elit. In ac libero lacinia, pellentesque lectus at, maximus risus. Nulla eget ullamcorper lorem. Mauris rutrum, velit id condimentum congue, augue est tristique magna, nec semper nunc turpis nec leo. Fusce in urna congue dui finibus ultrices. In hac habitasse platea dictumst. Curabitur at arcu ac nibh ullamcorper sodales.
                    </p>
                </div>
            </div>

            <div class="col-xs-12 quadro-branco borda-preta-lateral borda-preta-final">
                <div class="pull-left">

                    <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>

                    <a href="https://twitter.com/intent/tweet?url=" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>

                    <a href="https://plus.google.com/share?url=" target="_blank">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>

                </div>
                <div class="pull-right">
                    <a href="">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>--}}


        <div class="container">
            <div class="row">

                <!-- -- SINGLE POST ---->
                <div class="col-lg-8 text-center">
                    <!-- -- Blog Post 1 ---->
                    <a href="single-post.html"><h2>{{ $article['heading'] }}</h2></a>
                </div>
                <div class="col-lg-8 quadro-branco texto-preto borda-preta article-content">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="//www2.alerj.rj.gov.br/parlamentojuvenil/media/image//pj_projeto_final_lm_27_11_15.jpg" alt="">

                            {{--<img src="{!! make_image_url($article['image']) !!}" alt="">--}}
                        </a>
                    </div>

                    <!-- -- Blog Post 1 ---->
{{--
                    <a href="single-post.html"><h2>{{ $article['heading'] }}</h2></a>
--}}

                    <p><small>Posted: April 25, 2015</small> | <small>By: Admin | 3 Comments</small></p>
                    <p><b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Contrary to popular belief, <b>Lorem Ipsum is not simply random text</b>. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at <a href="#">Hampden-Sydney College</a> in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    <h4>Why do we use it?</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <blockquote>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</blockquote>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    <div class="spacing"></div>
                    <h6>SHARE:</h6>
                    <p class="share">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </p>

                </div><!-- --/col-lg-8 ---->


                <!-- -- SIDEBAR ---->
                <div class="col-lg-4">

  {{--                  <div class="row quadro-amarelo-nopadding texto-preto borda-preta" >
                        <div class="col-sm-12">
                            <h4>Search</h4>
                            <div class="hline"></div>
                            <p>
                                <br>
                                <input type="text" class="form-control" placeholder="Search something">
                            </p>
                        </div>
                    </div>


                    <hr>--}}


                    <div class="row" >


                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 quadro-amarelo texto-preto article-list" id="article_28577">
                            <div class="titulo borda-preta text-center">Três projetos podem virar Lei</div>

                            <div class="thumbnail">
                                <a href="#">
                                    <img src="//www2.alerj.rj.gov.br/parlamentojuvenil/media/image//pj_projeto_final_lm_27_11_15.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-12 quadro-branco borda-preta-lateral texto-preto">
                                27 11 2015


                                <div>
                                    Proposta mais votada tem como tema a violência contra a mulher; textos serão encaminhados ao governador Luiz Fernando Pezão &nbsp; No encerramento da 9ª edição do Parlamento Juvenil (PJ), nesta sexta-feira (27/11), foram escolhidos três projetos de lei a...
                                </div>
                            </div>

                            <div class="col-xs-12 quadro-branco borda-preta-lateral borda-preta-final">
                                <div class="pull-left">

                                    <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>

                                    <a href="https://twitter.com/intent/tweet?url=" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>

                                    <a href="https://plus.google.com/share?url=" target="_blank">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>

                                </div>
                                <div class="pull-right">
                                    <a href="//local.parlamentojuvenil.com/article/28577">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 quadro-amarelo texto-preto" id="article_28577">
                            <div class="titulo borda-preta text-center">Três projetos podem virar Lei</div>

                            <div class="thumbnail">
                                <a href="#">
                                    <img src="//www2.alerj.rj.gov.br/parlamentojuvenil/media/image//pj_projeto_final_lm_27_11_15.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-12 quadro-branco borda-preta-lateral texto-preto">
                                27 11 2015


                                <div>
                                    Proposta mais votada tem como tema a violência contra a mulher; textos serão encaminhados ao governador Luiz Fernando Pezão &nbsp; No encerramento da 9ª edição do Parlamento Juvenil (PJ), nesta sexta-feira (27/11), foram escolhidos três projetos de lei a...
                                </div>
                            </div>

                            <div class="col-xs-12 quadro-branco borda-preta-lateral borda-preta-final">
                                <div class="pull-left">

                                    <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>

                                    <a href="https://twitter.com/intent/tweet?url=" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>

                                    <a href="https://plus.google.com/share?url=" target="_blank">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>

                                </div>
                                <div class="pull-right">
                                    <a href="//local.parlamentojuvenil.com/article/28577">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center padding-top-15" id="more-gallery-new-button">
                        <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
                        <div class="col-md-2 col-xs-12"><div class="quadro-vermelho borda-preta">+</div></div>
                        <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
                    </div>

                    <div class="row text-center padding-top-15">
                        <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
                        <div class="col-md-2 col-xs-12"><div class="quadro-vermelho borda-preta">+</div></div>
                        <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
                    </div>

{{--                    <hr>
                    <div class="row quadro-amarelo-nopadding texto-preto borda-preta" >
                        <div class="col-sm-12">
                            <h4>Categories</h4>
                            <div class="hline"></div>
                            <p><a href="#"><i class="fa fa-angle-right"></i> Wordpress</a> <span class="badge badge-theme pull-right">9</span></p>
                            <p><a href="#"><i class="fa fa-angle-right"></i> Photoshop</a> <span class="badge badge-theme pull-right">3</span></p>
                            <p><a href="#"><i class="fa fa-angle-right"></i> Web Design</a> <span class="badge badge-theme pull-right">11</span></p>
                            <p><a href="#"><i class="fa fa-angle-right"></i> Development</a> <span class="badge badge-theme pull-right">5</span></p>
                            <p><a href="#"><i class="fa fa-angle-right"></i> Tips &amp; Tricks</a> <span class="badge badge-theme pull-right">7</span></p>
                            <p><a href="#"><i class="fa fa-angle-right"></i> Code Snippets</a> <span class="badge badge-theme pull-right">12</span></p>
                        </div>
                    </div>--}}


                    {{--<hr>--}}
                   {{-- <div class="row quadro-amarelo-nopadding texto-preto borda-preta" >
                        <div class="col-sm-12">

                            <h4>Recent Posts</h4>
                            <div class="hline"></div>
                            <ul class="popular-posts list-unstyled">
                                <li class="row">
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="//placehold.it/75x75" alt="Popular Post"></a>
                                    </div>
                                    <div class="col-md-9">
                                        <p class="pull-right"><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a>
                                        </p>
                                        <em class="small">Posted on 02/21/14</em>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="//placehold.it/75x75" alt="Popular Post"></a>
                                    </div>
                                    <div class="col-md-9">
                                        <p class="pull-right"><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a>
                                        </p>
                                        <em class="small">Posted on 02/21/14</em>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="//placehold.it/75x75" alt="Popular Post"></a>
                                    </div>
                                    <div class="col-md-9">
                                        <p class="pull-right"><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a>
                                        </p>
                                        <em class="small">Posted on 02/21/14</em>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="//placehold.it/75x75" alt="Popular Post"></a>
                                    </div>
                                    <div class="col-md-9">
                                        <p class="pull-right"><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a>
                                        </p>
                                        <em class="small">Posted on 02/21/14</em>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>--}}
            </div><!-- --/row ---->
        </div>
    </section>
@stop
