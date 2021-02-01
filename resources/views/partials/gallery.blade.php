<!-- gallery -->

<section id="case-study" class="head">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h1 class="text-center about-section">Últimas fotos</h1><br><br><br>
            </div>
        </div>
    </div>

    <div class="portfolio">
        <div class="container-fluid">
            <div class="row">
                @include('partials.gallery-iterate', ['images' => $gallery, 'kind' => 'new'])
            </div>
        </div>
    </div>
</section>
