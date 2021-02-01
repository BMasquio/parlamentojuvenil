<!-- Portfolio Grid Section -->
<section id="portfolio-{{ $edition }}" class="head">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center wow fadeIn">
                <h1 class="heading">Parlamentares da {{ $caption }} Edição</h1>
            </div>
        </div>
    </div>
</section>

<div class="owl-carousel" id="parlamentares-{{ $edition }}a">
    @foreach ($congressmen[$edition] as $congressman)
        <div>
            <div class="congressman-info">
                <img data-src="{!! make_image_url($congressman['url']) !!}" class="img-responsive owl-lazy" alt="">
                <div class="blackbg"></div>
                <div class="label">{{ $congressman['name'] }}<br><span class="city-name">{{ $congressman['city'] }}</span></div>
            </div>
        </div>
    @endforeach
</div>
