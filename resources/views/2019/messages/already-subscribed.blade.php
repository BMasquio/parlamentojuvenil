@extends( get_current_year().'.layouts.layout')

@section('contents')
    <div id="subscribe" class="form-subscribe" >
        <h1 class="text-center">Você já está inscrito!</h1>

        <div class="contact-text text-center">
            <p>Caso queira alterar algum dado, por favor, entre em contato com a gente:</p>
            <p><i class="fa fa-phone fa-fw"></i>@include('partials.phone') - <a href="mailto:@include('partials.email')" class="already-subscribed-email">@include('partials.email')</a></p>
        </div>
    </div>
@stop
