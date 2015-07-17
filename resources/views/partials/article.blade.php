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
            <img src="{{ $article['image'] }}" alt="">
            <p>{!! $article['body'] !!}</p>
            <button type="button" class="border-button-black" data-dismiss="modal">FECHAR</button>
        </div>
    </div>
</div>
