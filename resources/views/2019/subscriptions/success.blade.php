@extends( get_current_year().'.layouts.layout')

@section('contents')
{{--
    <div class="alert alert-success text-center" role="alert">
        <i class="fa fa-check" aria-hidden="true"></i>
        <h1 class="title-alert">Sua inscrição no Parlamento Juvenil {{ get_current_year() }} foi realizada!</h1>
        <h3>Por favor aguarde o contato da equipe do Parlamento Juvenil.</h3>
    </div>



--}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success text-center" role="alert">


                    <i class="fas fa-check-circle mb-4"></i>

                    <h2 class="subscribe-title">Sua inscrição no Parlamento Juvenil {{ get_current_year() }} foi realizada!</h2>

                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12 mt-4">
                <h3 class="subscribe-title">Por favor aguarde o contato da equipe do Parlamento Juvenil.</h3>
            </div>
        </div>
    </div>
@stop
