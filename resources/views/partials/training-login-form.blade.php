@include('partials.errors')

<form id="{{ isset($formId) ? $formId : 'subscribe' }}" method="POST" action="/2016/training">
    {!! csrf_field() !!}

    @include('partials.training-login-form-fields')

    {{--<pre>@{{ $data | json }}</pre>--}}
</form>
