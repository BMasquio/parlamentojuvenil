<form id="{{ isset($formId) ? $formId : 'subscribe' }}" method="POST" action="/subscriptions">
    {!! csrf_field() !!}

    @include('partials.subscribe-form-fields')

    {{--<pre>@{{ $data | json }}</pre>--}}
</form>
