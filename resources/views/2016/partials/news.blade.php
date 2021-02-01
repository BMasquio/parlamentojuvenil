@if (count($articles))
    <section id="noticias" class="fundo-azul">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h2>Últimas Notícias</h2>
                        </div>
                    </div>

                    <div class="row">
                        @include('2016.partials.iterate-news', ['first' => $first, 'last' => $last])
                    </div>

                    <br>

                    @if (count($articles) > $last)
                        <a href="{{ route('page.news', ['year' => $year]) }}">
                            <div class="row text-center">
                                <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
                                <div class="col-md-2 col-xs-12"><div class="quadro-vermelho borda-preta">Mais Notícias</div></div>
                                <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif
