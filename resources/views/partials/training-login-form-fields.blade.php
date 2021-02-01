<div id="training-form">
    @if(Session::has('error'))
        <p class="alert alert-danger">{{ Session::get('error') }}</p>
    @endif

    {{-- Telefone --}}
    <div class="row control-group"  transition="expand">
        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="matricula" class="sr-only control-label">Matrícula</label>
            <input
                v-model="matricula"
                type="matricula"
                class="form-control input-lg"
                value="{{ Input::old('matricula') }}"
                placeholder="Matrícula"
                name="matricula"
                id="matricula"
                required data-validation-required-message="Por favor digite seu número de matrícula."
            >
            <span class="help-block text-danger"></span>
        </div>

        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="nascimento" class="sr-only control-label">Data de Nascimento</label>
            <input
                v-model="nascimento"
                type="nascimento"
                class="form-control input-lg"
                value="{{ Input::old('nascimento') }}"
                placeholder="Data de Nascimento"
                name="nascimento"
                id="nascimento"
                required
                data-validation-required-message="Por favor insira a sua data de nascimento."
            >
            <span class="help-block text-danger"></span>
        </div>
    </div>

    <div id="success"></div>

    <div class="row"  transition="expand">
        <div class="form-group col-xs-12">
            <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block btn-submit-subscription">
                Entrar
            </button>
        </div>
    </div>
</div>
