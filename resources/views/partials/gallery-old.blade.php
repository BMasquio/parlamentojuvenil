<!-- gallery -->

<section id="case-study" class="head">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h1 class="text-center about-section">Fotos das outras edições</h1><br><br><br>
            </div>
        </div>
    </div>

    <div class="portfolio">
        <div class="container-fluid">
            @include('partials.gallery-iterate', ['images' => $oldGallery, 'kind' => 'old'])
        </div>
    </div>
</section>
