<?php $count = 1; ?>
<?php $articleCount = 1; ?>
@foreach ($articles as $article)
    @if ($articleCount >= $first && $articleCount <= $last)
        <div class="col-md-4">
            <div class="row">
                <a data-target="#article_{{ $article['id'] }}" class="portfolio-link" data-toggle="modal">
                    <div class="col-md-8">
                        <div class="row">
                            <span class="article-date">{{ $article['date'] }}</span>
                        </div>

                        <div class="row article-image">
                            <img data-original="{!! make_image_url($article['image']) !!}" width="99%" alt="" class="lazy"/>
                        </div>

                        <div class="row">
                            <span class="article-heading">{{ $article['heading'] }}</span>
                        </div>

                        <div class="row">
                            <span class="article-subheading">{{ $article['subheading'] }}</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        @if ($count % 3 == 0)
        </div>
        <br>
        <div class="row">
    @endif

    <?php $count++;?>
    @endif

    <?php $articleCount++;?>
@endforeach
