@if (isset($clipping) && $clipping)
    <section id="clippings-anteriores" class="pinboards fundo-azul2">
        <div class="container ">
            <div class="row text-center">
                <h2>Clipping Edição {{ $clipping[0]['year'] }}</h2>

                <section id="pinBoot">
                    @foreach($clipping as $item)
                        <article class="white-panel"><a href="{{ $item['pdf'] }}"><img src="{{ $item['jpg'] }}" alt=""></a>
                            <h4><a href="{{ $item['pdf'] }}">{{ $item['title'] }}</a></h4>

                            <div class="linhadivisoria">  </div>
                            <p class="lead1">{{ $item['lead'] }}</p>



                            <div class="col-xs-12 borda-preta-acima detalhes">
                                <div class="pull-left">
                                    <p class="vehicle">{{ $item['vehicle'] }}</p>
                                </div>
                                <div class="pull-right">
                                    <a class="vermais" href="{{ $item['pdf'] }}"> <i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>

                        </article>
                    @endforeach
                </section>
            </div>

            {{--<div class="row text-center">
                <button type="button" class="btn btn-default">Ver mais clippings</button>
            </div>--}}
        </div>
    </section>
@endif
