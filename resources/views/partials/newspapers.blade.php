<!-- old news -->
<section id="old-news" class="head old-news">
    <div class="container-fluid">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="row" id="#news">
                <h1 class="text-center about-section">Notícias das outras edições</h1><br><br><br>

                <div class="owl-carousel" id="newspapers">
                    @foreach ($newspapers as $link)
                        <div style="text-align: center;">
                            <a href="{{ $link['pdf'] ?: $link['url'] }}" target="_blank">
                                <img data-src="{!! make_image_url($link['jpg'], 150) !!}" alt="" class="owl-lazy" />
                            </a>
                            {{--<div>--}}
                                {{--{{ $link['name'] }}--}}
                                {{--<br/>--}}
                                {{--{{ $link['year'] }}--}}
                            {{--</div>--}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
