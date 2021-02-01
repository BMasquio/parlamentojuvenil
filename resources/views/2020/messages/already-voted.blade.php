@extends( get_current_year().'.layouts.layout')

@section('contents')
{{--    @include('2016.partials.header-fixed')--}}

    <section id="titulo" class="fundo-azul">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Obrigado!</h1>

                    <h2>Você já está votou nesta eleição!</h2>

                    <br>

                    @if (auth()->user())
                        <a href="{{ route('auth.logout') }}" class="btn btn-danger">SAIR</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop
