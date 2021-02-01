@extends( get_current_year().'.layouts.layout')

@section('contents')
    <section id="identify" class="identify-yourself">
        <div class="container">
            <div class="row text-center">
                <div class="offset-1 col-10 offset-md-3 col-md-6 offset-lg-2 col-lg-8">
                    <div>

                        <h3 class="identify-title mb-2">
                            @if (loggedUser()->is_voting)
                                Para votar você precisa se identificar.</h3>
                            @elseif (loggedUser()->is_flag_contest_subscribing)
                                Para inscrever a sua bandeira você precisa se identificar.
                            @elseif (loggedUser()->is_flag_contest_voting)
                                Para votar em uma bandeira você precisa se identificar.
                            @elseif (loggedUser()->is_training)
                                Para acessar o site da capacitação on-line, você precisa ser um(a) parlamentar juvenil. Por favor identifique-se:
                            @else
                                Identifique-se
                            @endif
                        </h3>
                    </div>
                </div>
            </div>




            <div class="row text-center">
                <div class="offset-1 col-10 offset-md-3 col-md-6 offset-lg-4 col-lg-4">
                    @include( get_current_year().'.partials.social-login')
                </div>
            </div>






            <div class="row text-center mt-5">
                <div class="offset-md-3 col-md-6">
                    <div class="nao-possui-redes">
                        <a href="naotenhorede.html"><p><a href="{{ route('auth.login.email') }}">Caso você não esteja em nenhuma dessas redes sociais, clique aqui.</a></p></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
