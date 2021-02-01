@extends(get_current_year().'.layouts.layout')

@section('contents')
    <section class="subscribe-section mastheadx" id="form-subscribe">
        <div class="container">
            <div id="subscribe" class="form-subscribe" >
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>
                            <span class="text-success">Inscreva-se no</span>
                            <span><br>Parlamento Juvenil {{ get_current_year() }}</h1></span>
                        <br>
                    </div>
                </div>

                @include('partials.subscribe-form')
            </div>
        </div>
    </section>
@stop

@section('page-javascripts')
    @include('scripts.vueSubscribe')
@stop
