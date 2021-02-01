@extends(get_current_year().'.layouts.layout')

@section('contents')

    <section id="error" class="fundo-azul">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        <i class="fas fa-exclamation-triangle mt-4 mb-4"></i>
                        <h1 class="subscribe-title">Erro 404</h1>
                        <h2 class="subscribe-title">Página não encontrada</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
