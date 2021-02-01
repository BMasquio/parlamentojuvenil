<!-- old news -->
<section id="old-news" class="head old-news">
    <div class="container-fluid">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="row" id="#news">
                <h1 class="text-center about-section">Notícias das Edições Anteriores</h1><br><br><br>
                @include('partials.iterate-news', ['first' => 1, 'last' => 6])
            </div>

            @if(count($articles) > 6)
                <div class="row" id="vue-more-old-news">
                    <div class="row text-center">
                        <button type="button" class="btn btn-danger" v-on:click="__click">Mais notícias</button>
                    </div>
                </div>
            @endif

            <!-- more old news -->
            <div id="more-old-news" style="display:none">
                <div class="row">
                    @include('partials.iterate-news', ['first' => 7, 'last' => 999999])
                </div>
            </div>
        </div>
    </div>
</section>

@foreach ($articles as $article)
    @include('partials.article-modal', ['article' => $article])
@endforeach
