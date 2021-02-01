<form id="{{ isset($formId) ? $formId : 'vue-subscribe' }}" method="POST" action="/subscriptions">
    {!! csrf_field() !!}

    @include('partials.subscribe-form-fields')
</form>
