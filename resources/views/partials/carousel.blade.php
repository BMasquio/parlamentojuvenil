<!-- testimonials -->
<section id="testimonials">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php $active = 'active'; ?>

                        @foreach ($carrousel as $congressman)
                            <div class="item {{ $active }}">
                                <img src="{!! make_image_url($congressman['photo']) !!}" alt="">
                                <div class="carousel-caption">
                                    <p>"{{ $congressman['testimonial'] }}"</p>
                                    <p class="carousel-name">{{ $congressman['name'] }}, {{ $congressman['city'] }}, Parlamentar Juvenil, {{ $congressman['editions'] }}</p>
                                </div>
                            </div>
                            <?php $active = ''; ?>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
