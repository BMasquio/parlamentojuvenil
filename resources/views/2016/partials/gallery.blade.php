

<section id="galeria" class="fundo-azul">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Galeria </h2>

                <div id="masonry-container" class="fluid masonry-container">
                    @include('2016.partials.gallery-iterate', ['images' => $gallery, 'kind' => 'new'])
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row text-center rodapegaleria" id="">
                <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
                <div class="col-md-2 col-xs-12"><div class="quadro-vermelho borda-preta">Mais fotos</div></div>
                <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
            </div>
        </div>
    </div>
</section>
