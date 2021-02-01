<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="article_{{ $article['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <i class="fa fa-times fa-3x fa-fw"></i>
        </div>
        <div class="modal-body">
            <h2>{!! $article['heading'] !!}</h2>

            <hr>

            <h6>{{ $article['date'] }}</h6>

            <img data-original="{!! make_image_url($article['image'], 640) !!}" alt="" class="lazy" />

            <p>{!! $article['body'] !!}</p>

            @if ($you = $article['youtube_url'])
                <div>
                    <p><iframe width="300" height="200" src="{{ youtube_embed($you) }}" frameborder="0" allowfullscreen></iframe></p>
                </div>
            @endif
            <button type="button" class="border-button-black" data-dismiss="modal">FECHAR</button>
        </div>
    </div>
</div>
