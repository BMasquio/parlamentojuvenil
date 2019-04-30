@extends(config('app.year').'.layouts.layout')

@section('contents')

    <section id="error" class="fundo-azul">
        <div class="container">
            <div class="error404-box">
                <div class="error404-logo">
                    <img src="/templates/{{ config('app.year') }}/assets/img/404error.jpg" alt="404 Error">
                </div>
                <div class="error404-box-body">
                    <p class="error404-box-msg">Página não encontrada</p>
                    erro 404
                </div>
            </div>
        </div>
    </section>
@stop
