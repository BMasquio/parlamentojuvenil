@extends( get_current_year().'.layouts.layout')

@section('contents')



    <div class="container">
        <div class="row">
            <div class="offset-2 col-8">

                <div class="alert alert-success text-center" role="alert">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <h1 class="title-alert">Seu voto foi validado!</h1>
                    <h3>Parabéns por participar do Parlamento Juvenil {{get_current_year()}}</h3>

                    <h2 class="mt-5">Alguém mais vai votar neste dispositivo? <br> Clique no botão abaixo</h2>

                    <a href="/vote" class="btn btn-lg btn-danger mt-5">Votar</a>

                    @if (auth()->user())
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ route('auth.logout') }}" class="btn btn-lg btn-success mt-5">Sair</a>
                    @endif
                </div>

            </div>
        </div>
    </div>









@stop
