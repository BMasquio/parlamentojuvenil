@extends( get_current_year().'.layouts.layout')

@section('contents')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger text-center" role="alert">


                    <i class="fas fa-exclamation-triangle mb-4"></i>

                    <h2 class="subscribe-title">Para participar do Parlamento Juvenil,<br> os alunos precisam ter entre 14 e 17 anos.</h2>

                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12 mt-4">
                {{--<h3 class="subscribe-title">Se você nasceu entre {{ Carbon\Carbon::parse(config('app.student.birthdate.start'))->format('d/m/Y') }} e {{ Carbon\Carbon::parse(config('app.student.birthdate.end'))->format('d/m/Y') }},<br> por favor entre em contato com a sua escola.</h3>--}}

                <h3 class="subscribe-title">Para concorrer o aluno deve completar 18 anos somente após 26 de novembro de 2019.</h3>

            </div>
        </div>
    </div>




    {{--

    <section id="subscribe" class="fundo-inscricao">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="subscribe-title">Para participar do Parlamento Juvenil, os alunos precisam ter entre 14 e 17 anos.</h1>
                <h3 class="subscribe-title">Se você nasceu entre {{ Carbon\Carbon::parse(config('app.student.birthdate.start'))->format('d/m/Y') }} e {{ Carbon\Carbon::parse(config('app.student.birthdate.end'))->format('d/m/Y') }}, por favor entre em contato com a sua escola.</h3>
            </div>
        </div>
    </section>

    --}}
@stop
