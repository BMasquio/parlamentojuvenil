<section id="vue-congressmen" class="fundo-azul1 parlamentares-anteriores">
    <div class="container text-center">
        <h2 class="text-center">Parlamentares da VIX Edição</h2>

        <div class="form-group">
            <div class="icon-addon addon-lg">
                <input v-model="searchText" type="text" placeholder="Buscar" class="form-control borda-preta" id="search">
                <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="search"></label>
            </div>
        </div>

        <div id="products" class="row list-group">
            <div v-for="item in congressmen | filterBy searchText in 'name' 'city'" class="item col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" :src="item.url" alt="" />
                    <div class="descricao">@{{ item.name }}<br><span class="city-name">@{{ item.city }}</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--


<section id="" class="fundo-azul1 parlamentares-anteriores">
    <div class="container text-center">
        <h2 class="text-center">Parlamentares da VIX Edição</h2>

        --}}
{{--<div class="form-group">
            <div class="icon-addon addon-lg">
                <input type="text" placeholder="Buscar" class="form-control borda-preta" id="search">
                <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="search"></label>
            </div>
        </div>--}}{{--


        <div class="form-group">
            <div class="icon-addon addon-lg">
                <input v-model="searchText" type="text" placeholder="Buscar" class="form-control borda-preta" id="search">
                <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="search"></label>
            </div>
        </div>



        <div id="products" class="row list-group">
            <div class="item  col-xs-4 col-lg-3 ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-3 ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-3 ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-3 ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-3 ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-3  ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-3 ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-3  ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-3 ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-3  ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-3 ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-3  ">
                <div class="thumbnail quadro-amarelo borda-preta">
                    <img class="group list-group-image" src="//www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a%20edicao%20(2014)/Joyce%20Dias%20de%20Lima%20-%20Guapimirim.jpg" alt="" />
                    <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                </div>
            </div>
        </div>


</section>--}}
