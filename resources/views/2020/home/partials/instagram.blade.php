<!-- INSTAGRAM Section -->
<section class="instagram" id="instagram">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mt-5 mb-5">Instagram</h2>
                <h4 class="text-center pt-3 pb-5">
                    Siga o nosso perfil <br>
                    <a href="https://www.instagram.com/parlamentojuvenilrj/" target="_blank"> @parlamentojuvenilrj </a>
                </h4>
                <div class="card-columns">
                    @foreach($instagramPictures as $image)
                        <div class="card">
                            <img src=" {{ $image }}" alt="" class="img-fluid" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>