@extends(get_current_year().'.layouts.layout')

@section('contents')

    {{--<section id="error" class="fundo-azul">
        <div class="container">
            <div class="error404-box">
                <div class="error404-logo">
                    <img src="/templates/{{ get_current_year() }}/assets/img/404error.jpg" alt="404 Error">
                </div>
                <div class="error404-box-body">
                    <p class="error404-box-msg">Ocorreu um erro nesta página</p>
                    erro 500
                </div>
            </div>
        </div>
    </section>--}}

    <section id="error" class="fundo-azul">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        <i class="fas fa-exclamation-triangle mt-4 mb-4"></i>
                        <h1 class="subscribe-title">Erro 500</h1>
                        <h2 class="subscribe-title">Erro Interno do Servidor</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

