@include('partials.errors')

<form id="{{ isset($formId) ? $formId : 'pre-subscribe' }}" method="POST" action="/subscriptions/start">
    {!! csrf_field() !!}

    {{-- Nome --}}
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="name" class="sr-only control-label">Nome Completo</label>
            <input v-model="name" type="text" class="form-control input-lg" value="{{ Input::old('name') }}" placeholder="Nome completo do aluno da rede estadual de ensino" name="name" id="name" required data-validation-required-message="Por favor digite seu nome.">
            <span class="help-block text-danger"></span>
            <button class="btn btn-primary">Iniciar inscrição</button>
        </div>
    </div>
</form>
