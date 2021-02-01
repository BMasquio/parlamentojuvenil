@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header')


    <section id="home">
        <div id="main-slider" class="carousel slide" data-ride="carousel">
        {{--    <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
            </ol>--}}
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="/templates/2016/images/edicoes/vix/banner_vix.jpg" alt="slider">
                    {{--<div class="carousel-caption">
                        <h2>Inscreva-se para a edição 2016 </h2>
                        <h4>participe do Parlamento Juvenil</h4>
                        <a href="#contact">Faça a sua inscrição <i class="fa fa-angle-right"></i></a>
                    </div>--}}
                </div>
{{--                <div class="item">
                    <img class="img-responsive" src="/templates/2016/images/slider/bg2.jpg" alt="slider">
                    <div class="carousel-caption">
                        <h2>Edição 2015 </h2>
                        <h4>saiba o que aconteceu na 10ª edição</h4>
                        <a href="#contact">Saiba Mais <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>--}}

            </div>
        </div>
    </section>
    <!--/#home-->

    @include('2016.partials.congressmen')

{{--
    <section id="parlamentares-anteriores" class="fundo-azul1" >
        <div class="container-fluid">
            <div class="row">
                <h2 class="text-center">Parlamentares da VIX Edição</h2>

                <div class="owl-carousel">

                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joyce Dias de Lima<br><span class="city-name">Guapimirim</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Juliana Carneiro Pessanha - Duque de Caxias.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Juliana Carneiro Pessanha - Duque de Caxias.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Juliana Carneiro Pessanha<br><span class="city-name">Duque de Caxias</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Julie Souto da Silva - Japeri.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Julie Souto da Silva - Japeri.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kaio Klinsman L. Rodrigues - Rio das Ostras.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kaio Klinsman L. Rodrigues - Rio das Ostras.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Kaio Klinsman L. Rodrigues<br><span class="city-name">Rio das Ostras</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Karline Lima Belem - Marica.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Karline Lima Belem - Marica.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Karline Lima Belem<br><span class="city-name">Marica</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kassia Cristina C. Santos - Porto Real.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kassia Cristina C. Santos - Porto Real.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Kassia Cristina C. Santos<br><span class="city-name">Porto Real</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lara Carvalho de Oliveira - Duas Barras.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lara Carvalho de Oliveira - Duas Barras.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lara Carvalho de Oliveira<br><span class="city-name">Duas Barras</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Larissa da Silva Ferreira - Nova Iguacu.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Larissa da Silva Ferreira - Nova Iguacu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Larissa da Silva Ferreira<br><span class="city-name">Nova Iguacu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas Gomes R. S. Azevedo - Macae.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas Gomes R. S. Azevedo - Macae.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lucas Gomes R. S. Azevedo<br><span class="city-name">Macae</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas da Silva Goncalves - Natividade.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas da Silva Goncalves - Natividade.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lucas da Silva Goncalves<br><span class="city-name">Natividade</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Felipe Freire da Silva - Rio de Janeiro Metro VI.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Felipe Freire da Silva - Rio de Janeiro Metro VI.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiz Felipe Freire da Silva<br><span class="city-name">Rio de Janeiro Metro VI</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Gustavo Marinho - Teresopolis.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Gustavo Marinho - Teresopolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiz Gustavo Marinho<br><span class="city-name">Teresopolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiza Barros do Nascimento - Iguaba Grande.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiza Barros do Nascimento - Iguaba Grande.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiza Barros do Nascimento<br><span class="city-name">Iguaba Grande</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Magno de Carvalho Junior - Rio Claro.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Magno de Carvalho Junior - Rio Claro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Magno de Carvalho Junior<br><span class="city-name">Rio Claro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maisa Junqueira da Silva - Sao Francisco de Itabapoana.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maisa Junqueira da Silva - Sao Francisco de Itabapoana.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Maisa Junqueira da Silva<br><span class="city-name">Sao Francisco de Itabapoana</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcia Freire do Nascimento - Rio de Janeiro Metro III.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcia Freire do Nascimento - Rio de Janeiro Metro III.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcia Freire do Nascimento<br><span class="city-name">Rio de Janeiro Metro III</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcio Enoque de A. Crispim - Itatiaia.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcio Enoque de A. Crispim - Itatiaia.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcio Enoque de A. Crispim<br><span class="city-name">Itatiaia</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marco Antonio A. M. da Silva - Santo Antonio de Padua.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marco Antonio A. M. da Silva - Santo Antonio de Padua.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marco Antonio A. M. da Silva<br><span class="city-name">Santo Antonio de Padua</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcos Vinicius R. da Silva - Belford Roxo.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcos Vinicius R. da Silva - Belford Roxo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcos Vinicius R. da Silva<br><span class="city-name">Belford Roxo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maria Isabel Alfredo Silva - Quatis.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maria Isabel Alfredo Silva - Quatis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Maria Isabel Alfredo Silva<br><span class="city-name">Quatis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mateus F. Lima de Souza - Sao Joao de Meriti.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mateus F. Lima de Souza - Sao Joao de Meriti.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mateus F. Lima de Souza<br><span class="city-name">Sao Joao de Meriti</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Matheus de M. G. Vieira - Engenheiro Paulo de Frontin.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Matheus de M. G. Vieira - Engenheiro Paulo de Frontin.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Matheus de M. G. Vieira<br><span class="city-name">Engenheiro Paulo de Frontin</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mauro Braga Bastos - Areal.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mauro Braga Bastos - Areal.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mauro Braga Bastos<br><span class="city-name">Areal</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mylena Goncalves Lugate - Varre-Sai.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mylena Goncalves Lugate - Varre-Sai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mylena Goncalves Lugate<br><span class="city-name">Varre</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Natalia Azevedo Silva - Quissama.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Natalia Azevedo Silva - Quissama.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Natalia Azevedo Silva<br><span class="city-name">Quissama</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Nathalya Mendes Paiva - Nilopolis.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Nathalya Mendes Paiva - Nilopolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Nathalya Mendes Paiva<br><span class="city-name">Nilopolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Palloma Silva da Costa - Arraial do Cabo.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Palloma Silva da Costa - Arraial do Cabo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Palloma Silva da Costa<br><span class="city-name">Arraial do Cabo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Patrick Santos Silva - Cantagalo.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Patrick Santos Silva - Cantagalo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Patrick Santos Silva<br><span class="city-name">Cantagalo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Paulo Goncalves Neves Neto - Trajano de Moraes.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Paulo Goncalves Neves Neto - Trajano de Moraes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Paulo Goncalves Neves Neto<br><span class="city-name">Trajano de Moraes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rafael de Jesus Viviani - Silva Jardim.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rafael de Jesus Viviani - Silva Jardim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Rafael de Jesus Viviani<br><span class="city-name">Silva Jardim</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Raone Silva Soares - Rio das Flores.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Raone Silva Soares - Rio das Flores.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Raone Silva Soares<br><span class="city-name">Rio das Flores</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rayssa Teixeira da Conceicao - Saquarema.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rayssa Teixeira da Conceicao - Saquarema.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Rayssa Teixeira da Conceicao<br><span class="city-name">Saquarema</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Taina Gomes Damas - Barra do Pirai.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Taina Gomes Damas - Barra do Pirai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Taina Gomes Damas<br><span class="city-name">Barra do Pirai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thais Silva Alcantara - Mage.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thais Silva Alcantara - Mage.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thais Silva Alcantara<br><span class="city-name">Mage</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thayna Nogueira da Silva - Mendes.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thayna Nogueira da Silva - Mendes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thayna Nogueira da Silva<br><span class="city-name">Mendes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thiago de Oliveira Lopes - Cardoso Moreira.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thiago de Oliveira Lopes - Cardoso Moreira.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thiago de Oliveira Lopes<br><span class="city-name">Cardoso Moreira</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Antonio Nascimento - Itaborai.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Antonio Nascimento - Itaborai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Vinicius Antonio Nascimento<br><span class="city-name">Itaborai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Selem da Fonseca - Carapebus.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Selem da Fonseca - Carapebus.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Vinicius Selem da Fonseca<br><span class="city-name">Carapebus</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Brito de Azevedo - Rio Bonito.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Brito de Azevedo - Rio Bonito.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yan Brito de Azevedo<br><span class="city-name">Rio Bonito</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Carlos S. da Silva - Valenca.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Carlos S. da Silva - Valenca.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yan Carlos S. da Silva<br><span class="city-name">Valenca</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yasmin Luizo de Sousa - Tres Rios.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yasmin Luizo de Sousa - Tres Rios.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yasmin Luizo de Sousa<br><span class="city-name">Tres Rios</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yolanda da Silva Nascimento - Volta Redonda.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yolanda da Silva Nascimento - Volta Redonda.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yolanda da Silva Nascimento<br><span class="city-name">Volta Redonda</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Acaian Neves dos Santos - Italva.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Acaian Neves dos Santos - Italva.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Acaian Neves dos Santos<br><span class="city-name">Italva</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Alex Leite Pereira - Pinheiral.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Alex Leite Pereira - Pinheiral.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Alex Leite Pereira<br><span class="city-name">Pinheiral</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Aline Goncalves Ferreira - Mangaratiba.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Aline Goncalves Ferreira - Mangaratiba.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Aline Goncalves Ferreira<br><span class="city-name">Mangaratiba</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Amanda Sheron M. Fernandes - Conceicao de Macabu.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Amanda Sheron M. Fernandes - Conceicao de Macabu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Amanda Sheron M. Fernandes<br><span class="city-name">Conceicao de Macabu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Beatriz F. da Silva - Queimados.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Beatriz F. da Silva - Queimados.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Ana Beatriz F. da Silva<br><span class="city-name">Queimados</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Carolina de Barros Nunes - Comendador Levy Gasparian.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Carolina de Barros Nunes - Comendador Levy Gasparian.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Ana Carolina de Barros Nunes<br><span class="city-name">Comendador Levy Gasparian</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andre Guilherme B. Barbosa - Cachoeiras de Macacu.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andre Guilherme B. Barbosa - Cachoeiras de Macacu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andre Guilherme B. Barbosa<br><span class="city-name">Cachoeiras de Macacu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andressa Fernandes de Souza - Miguel Pereira.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andressa Fernandes de Souza - Miguel Pereira.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andressa Fernandes de Souza<br><span class="city-name">Miguel Pereira</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andreza Ingride Goncalves - Sumidouro.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andreza Ingride Goncalves - Sumidouro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andreza Ingride Goncalves<br><span class="city-name">Sumidouro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Areza Zozimo Caputo Silva - Sao Jose do Vale do Rio Preto.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Areza Zozimo Caputo Silva - Sao Jose do Vale do Rio Preto.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Areza Zozimo Caputo Silva<br><span class="city-name">Sao Jose do Vale do Rio Preto</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Bianca Ramos Rosa - Paraty.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Bianca Ramos Rosa - Paraty.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Bianca Ramos Rosa<br><span class="city-name">Paraty</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Camila Sofia N. T. Sampaio - Santa Maria Madalena.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Camila Sofia N. T. Sampaio - Santa Maria Madalena.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Camila Sofia N. T. Sampaio<br><span class="city-name">Santa Maria Madalena</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Ferreira Pereira - Paty de Alferes.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Ferreira Pereira - Paty de Alferes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Carolina Ferreira Pereira<br><span class="city-name">Paty de Alferes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Pestana C. Leite - Tangua.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Pestana C. Leite - Tangua.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Carolina Pestana C. Leite<br><span class="city-name">Tangua</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Claudio Lucas Souza dos Reis - Mesquita.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Claudio Lucas Souza dos Reis - Mesquita.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Claudio Lucas Souza dos Reis<br><span class="city-name">Mesquita</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Debora Merces Mendes - Angra dos Reis.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Debora Merces Mendes - Angra dos Reis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Debora Merces Mendes<br><span class="city-name">Angra dos Reis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Deborah Milena F. de Paula - Itaguai.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Deborah Milena F. de Paula - Itaguai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Deborah Milena F. de Paula<br><span class="city-name">Itaguai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Evelyn Gomes Costa - Sao Joao da Barra.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Evelyn Gomes Costa - Sao Joao da Barra.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Evelyn Gomes Costa<br><span class="city-name">Sao Joao da Barra</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Fabricio Mathias S. Castilho - Pirai.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Fabricio Mathias S. Castilho - Pirai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Fabricio Mathias S. Castilho<br><span class="city-name">Pirai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel Richard B. Rodrigues - Rio de Janeiro Metro VI.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel Richard B. Rodrigues - Rio de Janeiro Metro VI.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriel Richard B. Rodrigues<br><span class="city-name">Rio de Janeiro Metro VI</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel da Silva Alves - Petropolis.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel da Silva Alves - Petropolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriel da Silva Alves<br><span class="city-name">Petropolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriele Barbosa de Sa - Sao Goncalo.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriele Barbosa de Sa - Sao Goncalo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriele Barbosa de Sa<br><span class="city-name">Sao Goncalo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giovanni Zuccolo S. Vellasco - Cambuci.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giovanni Zuccolo S. Vellasco - Cambuci.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Giovanni Zuccolo S. Vellasco<br><span class="city-name">Cambuci</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giulia Joana Santos Lopes - Armacao dos Buzios.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giulia Joana Santos Lopes - Armacao dos Buzios.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Giulia Joana Santos Lopes<br><span class="city-name">Armacao dos Buzios</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Greicykelly Miranda da Silva - Itaperuna.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Greicykelly Miranda da Silva - Itaperuna.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Greicykelly Miranda da Silva<br><span class="city-name">Itaperuna</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Guilherme M. P. Caldeira - Casimiro de Abreu.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Guilherme M. P. Caldeira - Casimiro de Abreu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Guilherme M. P. Caldeira<br><span class="city-name">Casimiro de Abreu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Helvis Esteff Braga - Sao Sebastiao do Alto.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Helvis Esteff Braga - Sao Sebastiao do Alto.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Helvis Esteff Braga<br><span class="city-name">Sao Sebastiao do Alto</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isabela Leticia de Assis - Cabo Frio.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isabela Leticia de Assis - Cabo Frio.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Isabela Leticia de Assis<br><span class="city-name">Cabo Frio</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isis Leal Silva - Carmo.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isis Leal Silva - Carmo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Isis Leal Silva<br><span class="city-name">Carmo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jeferson da Silva Viana - Sao Fidelis.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jeferson da Silva Viana - Sao Fidelis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jeferson da Silva Viana<br><span class="city-name">Sao Fidelis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jessica Goncalves da Silva - Barra Mansa.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jessica Goncalves da Silva - Barra Mansa.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jessica Goncalves da Silva<br><span class="city-name">Barra Mansa</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Carlos Freze Sthorc - Nova Friburgo.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Carlos Freze Sthorc - Nova Friburgo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Carlos Freze Sthorc<br><span class="city-name">Nova Friburgo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Aguiar Moreira - Cordeiro.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Aguiar Moreira - Cordeiro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro Aguiar Moreira<br><span class="city-name">Cordeiro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Costa Pitzer - Araruama.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Costa Pitzer - Araruama.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro Costa Pitzer<br><span class="city-name">Araruama</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro da Costa Valente - Sao Pedro da Aldeia.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro da Costa Valente - Sao Pedro da Aldeia.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro da Costa Valente<br><span class="city-name">Sao Pedro da Aldeia</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao da Rocha Ferreira Silva - Macuco.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao da Rocha Ferreira Silva - Macuco.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao da Rocha Ferreira Silva<br><span class="city-name">Macuco</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Johnatan Franca de Assis - Campos dos Goytacazes.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Johnatan Franca de Assis - Campos dos Goytacazes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Johnatan Franca de Assis<br><span class="city-name">Campos dos Goytacazes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jonathan Carlos S. Werneck - Seropedica.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jonathan Carlos S. Werneck - Seropedica.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jonathan Carlos S. Werneck<br><span class="city-name">Seropedica</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jorge Luiz Silva - Niteroi.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jorge Luiz Silva - Niteroi.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jorge Luiz Silva<br><span class="city-name">Niteroi</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Josafa Ferraz E. da Silva - Rio de Janeiro Metro IV.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Josafa Ferraz E. da Silva - Rio de Janeiro Metro IV.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Josafa Ferraz E. da Silva<br><span class="city-name">Rio de Janeiro Metro IV</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jose Pedro Geraldo Vieira - Bom Jardim.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jose Pedro Geraldo Vieira - Bom Jardim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jose Pedro Geraldo Vieira<br><span class="city-name">Bom Jardim</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joyce Dias de Lima<br><span class="city-name">Guapimirim</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Juliana Carneiro Pessanha - Duque de Caxias.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Juliana Carneiro Pessanha - Duque de Caxias.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Juliana Carneiro Pessanha<br><span class="city-name">Duque de Caxias</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Julie Souto da Silva - Japeri.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Julie Souto da Silva - Japeri.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kaio Klinsman L. Rodrigues - Rio das Ostras.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kaio Klinsman L. Rodrigues - Rio das Ostras.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Kaio Klinsman L. Rodrigues<br><span class="city-name">Rio das Ostras</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Karline Lima Belem - Marica.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Karline Lima Belem - Marica.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Karline Lima Belem<br><span class="city-name">Marica</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kassia Cristina C. Santos - Porto Real.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kassia Cristina C. Santos - Porto Real.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Kassia Cristina C. Santos<br><span class="city-name">Porto Real</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lara Carvalho de Oliveira - Duas Barras.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lara Carvalho de Oliveira - Duas Barras.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lara Carvalho de Oliveira<br><span class="city-name">Duas Barras</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Larissa da Silva Ferreira - Nova Iguacu.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Larissa da Silva Ferreira - Nova Iguacu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Larissa da Silva Ferreira<br><span class="city-name">Nova Iguacu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas Gomes R. S. Azevedo - Macae.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas Gomes R. S. Azevedo - Macae.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lucas Gomes R. S. Azevedo<br><span class="city-name">Macae</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas da Silva Goncalves - Natividade.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas da Silva Goncalves - Natividade.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lucas da Silva Goncalves<br><span class="city-name">Natividade</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Felipe Freire da Silva - Rio de Janeiro Metro VI.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Felipe Freire da Silva - Rio de Janeiro Metro VI.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiz Felipe Freire da Silva<br><span class="city-name">Rio de Janeiro Metro VI</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Gustavo Marinho - Teresopolis.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Gustavo Marinho - Teresopolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiz Gustavo Marinho<br><span class="city-name">Teresopolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiza Barros do Nascimento - Iguaba Grande.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiza Barros do Nascimento - Iguaba Grande.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiza Barros do Nascimento<br><span class="city-name">Iguaba Grande</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Magno de Carvalho Junior - Rio Claro.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Magno de Carvalho Junior - Rio Claro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Magno de Carvalho Junior<br><span class="city-name">Rio Claro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maisa Junqueira da Silva - Sao Francisco de Itabapoana.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maisa Junqueira da Silva - Sao Francisco de Itabapoana.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Maisa Junqueira da Silva<br><span class="city-name">Sao Francisco de Itabapoana</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcia Freire do Nascimento - Rio de Janeiro Metro III.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcia Freire do Nascimento - Rio de Janeiro Metro III.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcia Freire do Nascimento<br><span class="city-name">Rio de Janeiro Metro III</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcio Enoque de A. Crispim - Itatiaia.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcio Enoque de A. Crispim - Itatiaia.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcio Enoque de A. Crispim<br><span class="city-name">Itatiaia</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marco Antonio A. M. da Silva - Santo Antonio de Padua.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marco Antonio A. M. da Silva - Santo Antonio de Padua.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marco Antonio A. M. da Silva<br><span class="city-name">Santo Antonio de Padua</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcos Vinicius R. da Silva - Belford Roxo.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcos Vinicius R. da Silva - Belford Roxo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcos Vinicius R. da Silva<br><span class="city-name">Belford Roxo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maria Isabel Alfredo Silva - Quatis.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maria Isabel Alfredo Silva - Quatis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Maria Isabel Alfredo Silva<br><span class="city-name">Quatis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mateus F. Lima de Souza - Sao Joao de Meriti.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mateus F. Lima de Souza - Sao Joao de Meriti.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mateus F. Lima de Souza<br><span class="city-name">Sao Joao de Meriti</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Matheus de M. G. Vieira - Engenheiro Paulo de Frontin.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Matheus de M. G. Vieira - Engenheiro Paulo de Frontin.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Matheus de M. G. Vieira<br><span class="city-name">Engenheiro Paulo de Frontin</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mauro Braga Bastos - Areal.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mauro Braga Bastos - Areal.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mauro Braga Bastos<br><span class="city-name">Areal</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mylena Goncalves Lugate - Varre-Sai.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mylena Goncalves Lugate - Varre-Sai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mylena Goncalves Lugate<br><span class="city-name">Varre</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Natalia Azevedo Silva - Quissama.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Natalia Azevedo Silva - Quissama.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Natalia Azevedo Silva<br><span class="city-name">Quissama</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Nathalya Mendes Paiva - Nilopolis.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Nathalya Mendes Paiva - Nilopolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Nathalya Mendes Paiva<br><span class="city-name">Nilopolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Palloma Silva da Costa - Arraial do Cabo.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Palloma Silva da Costa - Arraial do Cabo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Palloma Silva da Costa<br><span class="city-name">Arraial do Cabo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Patrick Santos Silva - Cantagalo.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Patrick Santos Silva - Cantagalo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Patrick Santos Silva<br><span class="city-name">Cantagalo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Paulo Goncalves Neves Neto - Trajano de Moraes.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Paulo Goncalves Neves Neto - Trajano de Moraes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Paulo Goncalves Neves Neto<br><span class="city-name">Trajano de Moraes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rafael de Jesus Viviani - Silva Jardim.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rafael de Jesus Viviani - Silva Jardim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Rafael de Jesus Viviani<br><span class="city-name">Silva Jardim</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Raone Silva Soares - Rio das Flores.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Raone Silva Soares - Rio das Flores.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Raone Silva Soares<br><span class="city-name">Rio das Flores</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rayssa Teixeira da Conceicao - Saquarema.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rayssa Teixeira da Conceicao - Saquarema.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Rayssa Teixeira da Conceicao<br><span class="city-name">Saquarema</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Taina Gomes Damas - Barra do Pirai.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Taina Gomes Damas - Barra do Pirai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Taina Gomes Damas<br><span class="city-name">Barra do Pirai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thais Silva Alcantara - Mage.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thais Silva Alcantara - Mage.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thais Silva Alcantara<br><span class="city-name">Mage</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thayna Nogueira da Silva - Mendes.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thayna Nogueira da Silva - Mendes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thayna Nogueira da Silva<br><span class="city-name">Mendes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thiago de Oliveira Lopes - Cardoso Moreira.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thiago de Oliveira Lopes - Cardoso Moreira.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thiago de Oliveira Lopes<br><span class="city-name">Cardoso Moreira</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Antonio Nascimento - Itaborai.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Antonio Nascimento - Itaborai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Vinicius Antonio Nascimento<br><span class="city-name">Itaborai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Selem da Fonseca - Carapebus.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Selem da Fonseca - Carapebus.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Vinicius Selem da Fonseca<br><span class="city-name">Carapebus</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Brito de Azevedo - Rio Bonito.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Brito de Azevedo - Rio Bonito.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yan Brito de Azevedo<br><span class="city-name">Rio Bonito</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Carlos S. da Silva - Valenca.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Carlos S. da Silva - Valenca.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yan Carlos S. da Silva<br><span class="city-name">Valenca</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yasmin Luizo de Sousa - Tres Rios.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yasmin Luizo de Sousa - Tres Rios.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yasmin Luizo de Sousa<br><span class="city-name">Tres Rios</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yolanda da Silva Nascimento - Volta Redonda.jpg" class="img-responsive owl-lazy loading" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yolanda da Silva Nascimento - Volta Redonda.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yolanda da Silva Nascimento<br><span class="city-name">Volta Redonda</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Acaian Neves dos Santos - Italva.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Acaian Neves dos Santos - Italva.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Acaian Neves dos Santos<br><span class="city-name">Italva</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Alex Leite Pereira - Pinheiral.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Alex Leite Pereira - Pinheiral.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Alex Leite Pereira<br><span class="city-name">Pinheiral</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Aline Goncalves Ferreira - Mangaratiba.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Aline Goncalves Ferreira - Mangaratiba.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Aline Goncalves Ferreira<br><span class="city-name">Mangaratiba</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Amanda Sheron M. Fernandes - Conceicao de Macabu.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Amanda Sheron M. Fernandes - Conceicao de Macabu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Amanda Sheron M. Fernandes<br><span class="city-name">Conceicao de Macabu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Beatriz F. da Silva - Queimados.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Beatriz F. da Silva - Queimados.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Ana Beatriz F. da Silva<br><span class="city-name">Queimados</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Carolina de Barros Nunes - Comendador Levy Gasparian.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Carolina de Barros Nunes - Comendador Levy Gasparian.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Ana Carolina de Barros Nunes<br><span class="city-name">Comendador Levy Gasparian</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andre Guilherme B. Barbosa - Cachoeiras de Macacu.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andre Guilherme B. Barbosa - Cachoeiras de Macacu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andre Guilherme B. Barbosa<br><span class="city-name">Cachoeiras de Macacu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andressa Fernandes de Souza - Miguel Pereira.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andressa Fernandes de Souza - Miguel Pereira.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andressa Fernandes de Souza<br><span class="city-name">Miguel Pereira</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andreza Ingride Goncalves - Sumidouro.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andreza Ingride Goncalves - Sumidouro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andreza Ingride Goncalves<br><span class="city-name">Sumidouro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Areza Zozimo Caputo Silva - Sao Jose do Vale do Rio Preto.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Areza Zozimo Caputo Silva - Sao Jose do Vale do Rio Preto.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Areza Zozimo Caputo Silva<br><span class="city-name">Sao Jose do Vale do Rio Preto</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Bianca Ramos Rosa - Paraty.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Bianca Ramos Rosa - Paraty.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Bianca Ramos Rosa<br><span class="city-name">Paraty</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Camila Sofia N. T. Sampaio - Santa Maria Madalena.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Camila Sofia N. T. Sampaio - Santa Maria Madalena.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Camila Sofia N. T. Sampaio<br><span class="city-name">Santa Maria Madalena</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Ferreira Pereira - Paty de Alferes.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Ferreira Pereira - Paty de Alferes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Carolina Ferreira Pereira<br><span class="city-name">Paty de Alferes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Pestana C. Leite - Tangua.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Pestana C. Leite - Tangua.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Carolina Pestana C. Leite<br><span class="city-name">Tangua</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Claudio Lucas Souza dos Reis - Mesquita.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Claudio Lucas Souza dos Reis - Mesquita.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Claudio Lucas Souza dos Reis<br><span class="city-name">Mesquita</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Debora Merces Mendes - Angra dos Reis.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Debora Merces Mendes - Angra dos Reis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Debora Merces Mendes<br><span class="city-name">Angra dos Reis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Deborah Milena F. de Paula - Itaguai.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Deborah Milena F. de Paula - Itaguai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Deborah Milena F. de Paula<br><span class="city-name">Itaguai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Evelyn Gomes Costa - Sao Joao da Barra.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Evelyn Gomes Costa - Sao Joao da Barra.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Evelyn Gomes Costa<br><span class="city-name">Sao Joao da Barra</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Fabricio Mathias S. Castilho - Pirai.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Fabricio Mathias S. Castilho - Pirai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Fabricio Mathias S. Castilho<br><span class="city-name">Pirai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel Richard B. Rodrigues - Rio de Janeiro Metro VI.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel Richard B. Rodrigues - Rio de Janeiro Metro VI.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriel Richard B. Rodrigues<br><span class="city-name">Rio de Janeiro Metro VI</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel da Silva Alves - Petropolis.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel da Silva Alves - Petropolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriel da Silva Alves<br><span class="city-name">Petropolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriele Barbosa de Sa - Sao Goncalo.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriele Barbosa de Sa - Sao Goncalo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriele Barbosa de Sa<br><span class="city-name">Sao Goncalo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giovanni Zuccolo S. Vellasco - Cambuci.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giovanni Zuccolo S. Vellasco - Cambuci.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Giovanni Zuccolo S. Vellasco<br><span class="city-name">Cambuci</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giulia Joana Santos Lopes - Armacao dos Buzios.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giulia Joana Santos Lopes - Armacao dos Buzios.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Giulia Joana Santos Lopes<br><span class="city-name">Armacao dos Buzios</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Greicykelly Miranda da Silva - Itaperuna.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Greicykelly Miranda da Silva - Itaperuna.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Greicykelly Miranda da Silva<br><span class="city-name">Itaperuna</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Guilherme M. P. Caldeira - Casimiro de Abreu.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Guilherme M. P. Caldeira - Casimiro de Abreu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Guilherme M. P. Caldeira<br><span class="city-name">Casimiro de Abreu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Helvis Esteff Braga - Sao Sebastiao do Alto.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Helvis Esteff Braga - Sao Sebastiao do Alto.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Helvis Esteff Braga<br><span class="city-name">Sao Sebastiao do Alto</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isabela Leticia de Assis - Cabo Frio.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isabela Leticia de Assis - Cabo Frio.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Isabela Leticia de Assis<br><span class="city-name">Cabo Frio</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isis Leal Silva - Carmo.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isis Leal Silva - Carmo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Isis Leal Silva<br><span class="city-name">Carmo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jeferson da Silva Viana - Sao Fidelis.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jeferson da Silva Viana - Sao Fidelis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jeferson da Silva Viana<br><span class="city-name">Sao Fidelis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jessica Goncalves da Silva - Barra Mansa.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jessica Goncalves da Silva - Barra Mansa.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jessica Goncalves da Silva<br><span class="city-name">Barra Mansa</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Carlos Freze Sthorc - Nova Friburgo.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Carlos Freze Sthorc - Nova Friburgo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Carlos Freze Sthorc<br><span class="city-name">Nova Friburgo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Aguiar Moreira - Cordeiro.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Aguiar Moreira - Cordeiro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro Aguiar Moreira<br><span class="city-name">Cordeiro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Costa Pitzer - Araruama.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Costa Pitzer - Araruama.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro Costa Pitzer<br><span class="city-name">Araruama</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro da Costa Valente - Sao Pedro da Aldeia.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro da Costa Valente - Sao Pedro da Aldeia.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro da Costa Valente<br><span class="city-name">Sao Pedro da Aldeia</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao da Rocha Ferreira Silva - Macuco.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao da Rocha Ferreira Silva - Macuco.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao da Rocha Ferreira Silva<br><span class="city-name">Macuco</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Johnatan Franca de Assis - Campos dos Goytacazes.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Johnatan Franca de Assis - Campos dos Goytacazes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Johnatan Franca de Assis<br><span class="city-name">Campos dos Goytacazes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jonathan Carlos S. Werneck - Seropedica.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jonathan Carlos S. Werneck - Seropedica.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jonathan Carlos S. Werneck<br><span class="city-name">Seropedica</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jorge Luiz Silva - Niteroi.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jorge Luiz Silva - Niteroi.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jorge Luiz Silva<br><span class="city-name">Niteroi</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Josafa Ferraz E. da Silva - Rio de Janeiro Metro IV.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Josafa Ferraz E. da Silva - Rio de Janeiro Metro IV.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Josafa Ferraz E. da Silva<br><span class="city-name">Rio de Janeiro Metro IV</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jose Pedro Geraldo Vieira - Bom Jardim.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jose Pedro Geraldo Vieira - Bom Jardim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jose Pedro Geraldo Vieira<br><span class="city-name">Bom Jardim</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" class="img-responsive owl-lazy" alt="" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joyce Dias de Lima<br><span class="city-name">Guapimirim</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row text-center">
                <button type="button" class="btn btn-default">Ver todos os parlamentares da edição 2015</button>
            </div>

        </div>
    </section><!--/#anteriores-->--}}



    <section id="mesadiretora-anteriores" class="fundo-azul2 mesadiretora-anteriores">
        <div class="container">
            <div class="row about-section no-border text-center">

                    <h2 id="calendar">MESA DIRETORA</h2>

                    <div class="row text-center">

                        <div class="visible-xs mobile">
                            <div class="item quadro-amarelo borda-preta">
                                <a href="#"><p class="cargo">Presidente</P>
                                    <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                    <P class="nome">Nome do Parlamentar</P>
                                    <div class="caixa-preta"> Cidade </div>
                                </a>
                            </div>

                            <div class="item quadro-amarelo borda-preta">
                                <a href="#"><p class="cargo">Vice Presidente</P>
                                    <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                    <P class="nome">Nome do Parlamentar</P>
                                    <div class="caixa-preta"> Cidade </div>
                                </a>
                            </div>

                            <div class="item quadro-amarelo borda-preta">
                                <a href="#"><p class="cargo">2ª Vice Presidente</P>
                                    <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                    <P class="nome">Nome do Parlamentar</P>
                                    <div class="caixa-preta"> Cidade </div>
                                </a>
                            </div>

                            <div class="item quadro-amarelo borda-preta">
                                <a href="#"><p class="cargo">1ª Secretária</P>
                                    <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                    <P class="nome">Nome do Parlamentar</P>
                                    <div class="caixa-preta"> Cidade </div>
                                </a>
                            </div>

                            <div class="item quadro-amarelo borda-preta">
                                <a href="#"><p class="cargo">2ª Secretária</P>
                                    <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                    <P class="nome">Nome do Parlamentar</P>
                                    <div class="caixa-preta"> Cidade </div>
                                </a>
                            </div>



                            <div class="item quadro-amarelo borda-preta">
                                <a href="#"><p class="cargo">Suplentes</P>
                                    <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                    <P class="nome">Nome do Parlamentar</P>
                                    <div class="caixa-preta"> Cidade </div>
                                </a>
                            </div>

                            <div class="item quadro-amarelo borda-preta">
                                <a href="#"><p class="cargo">Suplentes</P>
                                    <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                    <P class="nome">Nome do Parlamentar</P>
                                    <div class="caixa-preta"> Cidade </div>
                                </a>
                            </div>
                        </div>
                        <div class="tree hidden-xs">
                            <ul>
                                <li>
                                    <a href="#"><p class="cargo">Presidente</P>
                                        <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                        <P>Nome do Parlamentar</P>
                                        <div class="caixa-preta"> Cidade </div>
                                    </a>
                                    <ul>
                                        <li class="largura">
                                            <a href="#"><p class="cargo">Vice Presidente</P>
                                                <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                                <P>Nome do Parlamentar</P>
                                                <div class="caixa-preta"> Cidade </div>
                                            </a>
                                        </li>
                                        <li>

                                            <ul>
                                                <li>
                                                    <a href="#"><p class="cargo">1ª Secretária</P>
                                                        <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                                        <P>Nome do Parlamentar</P>
                                                        <div class="caixa-preta"> Cidade </div>
                                                    </a>
                                                    <ul class="">
                                                        <li>
                                                            <a href="#"><p class="cargo">Suplentes</P>
                                                                <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                                                <P>Nome do Parlamentar</P>
                                                                <div class="caixa-preta"> Cidade </div>
                                                            </a>
                                                        </li>


                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"><p class="cargo">2ª Secretária</P>
                                                        <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                                        <P>Nome do Parlamentar</P>
                                                        <div class="caixa-preta"> Cidade </div>
                                                    </a>                        <ul class="">
                                                        <li>
                                                            <a href="#"><p class="cargo">Suplentes</P>
                                                                <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                                                <P>Nome do Parlamentar</P>
                                                                <div class="caixa-preta"> Cidade </div>
                                                            </a>
                                                        </li>


                                                    </ul>

                                                </li>

                                            </ul>
                                        </li>
                                        <li class="largura">
                                            <a href="#"><p class="cargo">2º Vice Presidente</P>
                                                <img src="//local.parlamentojuvenil.com/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/recortadas/Luiza%20Barros%20do%20Nascimento%20-%20Iguaba%20Grande.jpg" alt=""><BR>
                                                <P>Nome do Parlamentar</P>
                                                <div class="caixa-preta"> Cidade </div>
                                            </a>

                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

            </div>
        </div>
    </section>


    <section id="video-anteriores" class="fundo-azul3">
        <div class="container">
            <div class="row text-center">

                <h2>Vídeo Institucional IX Edição</h2>

                <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/EWKw3Zt105E' frameborder='0' allowfullscreen></iframe></div>

            </div>
        </div>
    </section>


   {{-- <section id="noticias-anteriores" class="fundo-azul4 noticias">

        <div class="container">
            <div class="row">
                <h1 style="text-align: center;">Notícias IX Edição</h1>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="//placehold.it/260x180" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                    <h4><a href="#">Title of the post</a></h4>
                    <p>
                        Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque, ad nobis propriae quaerendum sea.
                    </p>
                    <p><a class="btn btn-info btn-sm" href="#">Read more</a></p>
                    <br/>
                    <ul class="list-inline">
                      --}}{{--  <li><i class="glyphicon glyphicon-user"></i> by <a href="#">John</a> | </li>--}}{{--
                        <li><i class="glyphicon glyphicon-calendar"></i> Sept 16th, 2012 | </li>
                        --}}{{--<li><i class="glyphicon glyphicon-comment"></i> <a href="#">3 Comments</a> | </li>
                        <li><i class="glyphicon glyphicon-share"></i> <a href="#">39 Shares</a></li>--}}{{--
                        <li><i class="icon-tags"></i> --}}{{--Tags :--}}{{-- <a href="#"><span class="label label-info">Snipp</span></a>
                            <a href="#"><span class="label label-info">Bootstrap</span></a>
                            <a href="#"><span class="label label-info">UI</span></a>
                            <a href="#"><span class="label label-info">growth</span></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="//placehold.it/260x180" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                    <h4><a href="#">Title of the post</a></h4>
                    <p>
                        Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque, ad nobis propriae quaerendum sea.
                    </p>
                    <p><a class="btn btn-info btn-sm" href="#">Read more</a></p>
                    <br/>
                    <ul class="list-inline">
                      --}}{{--  <li><i class="glyphicon glyphicon-user"></i> by <a href="#">John</a> | </li>--}}{{--
                        <li><i class="glyphicon glyphicon-calendar"></i> Sept 16th, 2012 | </li>
                        --}}{{--<li><i class="glyphicon glyphicon-comment"></i> <a href="#">3 Comments</a> | </li>
                        <li><i class="glyphicon glyphicon-share"></i> <a href="#">39 Shares</a></li>--}}{{--
                        <li><i class="icon-tags"></i> --}}{{--Tags :--}}{{-- <a href="#"><span class="label label-info">Snipp</span></a>
                            <a href="#"><span class="label label-info">Bootstrap</span></a>
                            <a href="#"><span class="label label-info">UI</span></a>
                            <a href="#"><span class="label label-info">growth</span></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="//placehold.it/260x180" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                    <h4><a href="#">Title of the post</a></h4>
                    <p>
                        Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque, ad nobis propriae quaerendum sea.
                    </p>
                    <p><a class="btn btn-info btn-sm" href="#">Read more</a></p>
                    <br/>
                    <ul class="list-inline">
                      --}}{{--  <li><i class="glyphicon glyphicon-user"></i> by <a href="#">John</a> | </li>--}}{{--
                        <li><i class="glyphicon glyphicon-calendar"></i> Sept 16th, 2012 | </li>
                        --}}{{--<li><i class="glyphicon glyphicon-comment"></i> <a href="#">3 Comments</a> | </li>
                        <li><i class="glyphicon glyphicon-share"></i> <a href="#">39 Shares</a></li>--}}{{--
                        <li><i class="icon-tags"></i> --}}{{--Tags :--}}{{-- <a href="#"><span class="label label-info">Snipp</span></a>
                            <a href="#"><span class="label label-info">Bootstrap</span></a>
                            <a href="#"><span class="label label-info">UI</span></a>
                            <a href="#"><span class="label label-info">growth</span></a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>

        <div class="row text-center">
            <button type="button" class="btn btn-default">Ver mais notícias</button>
        </div>

    </section>--}}


    @include('2016.partials.projects')


    {{--<section id="noticias-anteriores" class="fundo-azul5 numeros">

        <div class="container">
            <div class="row">
                <h1 style="text-align: center;">Estatísticas IX Edição</h1>
            </div>

            <div class="row tile_count">
                <div class="animated flipInY col-md-4 col-sm-4 col-xs-4 tile_stats_count text-center">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top"><i class="fa fa-user"></i>Pessoas Inscritas</span>
                        <div class="count">2500</div>
                        --}}{{--<span class="count_bottom"><i class="green">4% </i> From last Week</span>--}}{{--
                    </div>
                </div>

                <div class="animated flipInY col-md-4 col-sm-4 col-xs-4 tile_stats_count text-center">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top"><i class="fa fa-user"></i>Projetos Inscritos</span>
                        <div class="count green">2,500</div>
                        --}}{{--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>--}}{{--
                    </div>
                </div>
                <div class="animated flipInY col-md-4 col-sm-4 col-xs-4 tile_stats_count text-center">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top"><i class="fa fa-user"></i>Projetos Aprovados</span>
                        <div class="count">4,567</div>
                        --}}{{--<span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>--}}{{--
                    </div>
                </div>
--}}{{--
                <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                        <div class="count">2,315</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                </div>
                <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                        <div class="count">7,325</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                </div>
--}}{{--
            </div>
        </div>

    </section>--}}


   {{-- <section id="downloads-anteriores" class="fundo-azul6">

        <div id="whatis" class="content-section-b" style="border-top-width: 0px;">
            <div class="container">
                <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                    <h2>Downloads IX Edição</h2>
                    <p class="lead" style="margin-top:0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>

                </div>
                <div class="row">
                    <div class="col-sm-4 wow fadeInDown text-center animated animated" style="visibility: visible;">
                        <img class="rotate" src="img/icon/tweet.svg" alt="Generic placeholder image">
                        <h3>Regimento Interno</h3>
                        <p class="lead">Faça o download do regimento interno do Parlamento Juvenil 2015 </p>
                        <a class="btn btn-default btn-lg" href="#modal-download" data-toggle="modal">
                            <i class="fa fa-download fa-lg" aria-hidden="true"></i>&nbsp;
                            Download
                        </a>

                    </div>
                    <div class="col-sm-4 wow fadeInDown text-center animated animated" style="visibility: visible;">
                        <img class="rotate" src="img/icon/picture.svg" alt="Generic placeholder image">
                        <h3>Projetos Aprovados</h3>
                        <p class="lead">Faça o download dos projetos aprovados no Parlamento Juvenil 2015 </p>
                        <a class="btn btn-default btn-lg" href="#modal-download" data-toggle="modal">
                            <i class="fa fa-download fa-lg" aria-hidden="true"></i>&nbsp;
                            Download
                        </a>

                    </div>
                    <div class="col-sm-4 wow fadeInDown text-center animated animated" style="visibility: visible;">
                        <img class="rotate" src="img/icon/retina.svg" alt="Generic placeholder image">
                        <h3>Cronograma</h3>
                        <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                        <a class="btn btn-default btn-lg" href="#modal-download" data-toggle="modal">
                            <i class="fa fa-download fa-lg" aria-hidden="true"></i>&nbsp;
                            Download
                        </a>

                    </div>
                </div>
              </div>
        </div>
    </section>--}}

    @include('2016.partials.clipping', ['clipping' => $clipping])
@stop


