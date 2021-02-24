<div>
    <input type="hidden" name="student_id" value="{!! $student->id !!}">

    {{-- Matricula e Nascimento --}}
    <div class="row control-group"  transition="expand">
        <div class="form-group col-12 floating-label-form-group controls">
            <label for="registration" class="control-label">Matrícula</label>
            <input
                    v-model="registration"
                    type="text"
                    class="form-control input-lg"
                    value="{!! old('registration') ?: $student->registration !!}"
                    placeholder="Matrícula"
                    name="registration"
                    id="registration"
                    required
                    disabled
                    data-validation-required-message="Por favor digite sua matrícula."
            >
            <span class="help-block text-danger"></span>
        </div>

        <div class="form-group col-12 floating-label-form-group controls">
            <label for="birthdate" class="control-label">Data de nascimento</label>
            <input
                    v-model="birthdate"
                    type="text"
                    class="form-control input-lg"
                    value="{!! old('birthdate') ?: $student->birthdate !!}"
                    {{--onkeydown="return false;"--}}
                    placeholder="Data de nascimento"
                    name="birthdate"
                    id="birthdate"
                    required
                    disabled
                    data-validation-required-message="Por favor digite sua data de nascimento."
            >
        </div>
    </div>

    {{--Nome--}}
    <div class="row control-group">
        <div class="form-group col-12 floating-label-form-group controls">
            <label for="name" class="control-label">Nome Completo</label>
            <input
                    v-model="name"
                    type="text"
                    class="form-control input-lg"
                    value="{!! old('name') ?: $student->name !!}"
                    placeholder="Nome Completo"
                    name="name"
                    id="name"
                    disabled
                    required data-validation-required-message="Por favor digite seu nome."
            >
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Nome Social --}}
    <div class="row control-group">
        <div class="form-group col-12 floating-label-form-group controls">
            <label for="social_name" class="control-label">Apelido</label>
            <input
                    v-model="social_name"
                    type="text"
                    class="form-control input-lg"
                    value="{!! old('social_name') ?: $student->social_name !!}"
                    placeholder="Apelido"
                    name="social_name"
                    id="social_name"
                    required
                    data-validation-required-message="Por favor digite seu nome social."
            >
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Email --}}
    <div class="row control-group"  transition="expand">
        <div class="form-group col-12 floating-label-form-group controls">
            <label for="email" class="control-label">E-mail</label>
            <input
                    v-model="email"
                    type="text"
                    class="form-control input-lg"
                    value="{!! old('email') ?: $student->email !!}"
                    placeholder="E-mail"
                    name="email"
                    id="email"
                    data-validation-required-message="Por favor digite o seu email."
            >
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Municipio escolar e escola --}}
    <div id="vue-schools-VUE-DISABLED">
        {{-- Cidade --}}
        <div class="row control-group" transition="expand">
            <div class="form-group col-12 floating-label-form-group controls">
                <label for="city" class="control-label">Município</label>
                <select class="form-control input-lg" placeholder="Município" name="city" id="city" required data-validation-required-message="Por favor preencha o município.">
                    {{--<select id="city-edit" v-model="city" class="form-control input-lg" placeholder="Município" name="city" id="city" required data-validation-required-message="Por favor preencha o município.">--}}

                    @if (is_null($city = old('city') ?: $student->city) && $isSubscribeForm)
                        <option value="" selected>CIDADE AONDE VOCÊ ESTUDA</option>
                    @endif

                    @foreach ($cities as $key => $city)
                        <option
                            value="{!! mb_strtoclean($city->name) !!}"
                            {!! $student->city == $city->name ? 'selected' : '' !!}
                        >
                            {!! $city->name !!}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- Unidade Escolar e série --}}
        <div class="row control-group"  transition="expand">
            <div class="form-group col-12 col-md-6 floating-label-form-group controls">
                <label for="school" class="control-label">Escola</label>
                <select id="school-edit" value="" options="schools" class="form-control input-lg" placeholder="Escola" name="school" id="school">
                    <option value="">SELECIONE SUA ESCOLA</option>
                    <option
                            v-for="item in schools"
                            v-bind:value="item.name"
                            v-bind:selected="school == item.name"
                    >
                        @{{ item.name }}
                    </option>
                </select>
                <span class="help-block text-danger"></span>
            </div>

            <div class="form-group col-12 col-md-6 floating-label-form-group controls">
                <label for="registration" class="control-label">Série</label>

                <select v-model="grade" class="form-control input-lg" placeholder="Sexo" name="grade" id="grade" required data-validation-required-message="Por favor preencha a série.">
                    <option value="" selected>ESCOLHA A SÉRIE</option>

                    <option
                            value="1o ano do ensino médio"
                            {!! (old('grade') == '1o ano do ensino médio' || $student->grade == '1o ano do ensino médio') ? 'selected' : '' !!}
                    >
                        1o ano do ensino médio
                    </option>

                    <option
                            value="2o ano do ensino médio"
                            {!! (old('grade') == '2o ano do ensino médio' || $student->grade == '2o ano do ensino médio') ? 'selected' : '' !!}
                    >
                        2o ano do ensino médio
                    </option>
                </select>
                <span class="help-block text-danger"></span>
            </div>
        </div>
    </div>

    {{-- Sexo --}}
    <div class="row control-group"  transition="expand">
        <div class="form-group col-lg-4 floating-label-form-group controls">
            <label for="gender" class="control-label">Sexo</label>
            <select v-model="gender" class="form-control input-lg" placeholder="Sexo" name="gender" id="gender" required data-validation-required-message="Por favor preencha o sexo.">
                <option value="" selected>SEXO</option>

                <option
                        value="F"
                        {!! (old('gender') == 'F' || $student->gender == 'F') ? 'selected' : '' !!}
                >
                    Feminino
                </option>

                <option
                        value="M"
                        {!! (old('gender') == 'M' ?: $student->gender == 'M') ? 'selected' : '' !!}
                >
                    Masculino
                </option>
            </select>
            <span class="help-block text-danger"></span>
        </div>
        <div class="form-group col-lg-8 floating-label-form-group controls">
            <label for="gender2" class="control-label">Identidade de Gênero</label>
            <select v-model="gender2" class="form-control input-lg" placeholder="Identidade de Gênero" name="gender2" id="gender2" required data-validation-required-message="Por favor preencha a identidade de gênero.">
                <option value="" selected>IDENTIDADE DE GÊNERO</option>

                <option
                        value="F"
                        {!! (old('gender2') == 'F' ?: $student->gender2 == 'F') ? 'selected' : '' !!}
                >
                    Feminino
                </option>

                <option
                        value="M"
                        {!! (old('gender2') == 'M' ?: $student->gender2 == 'M') ? 'selected' : '' !!}
                >
                    Masculino
                </option>
            </select>
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Identidade / CPF --}}
    <div class="row control-group"  transition="expand">
        <div class="form-group col-12 col-md-4 floating-label-form-group controls">
            <label for="cpf" class="control-label">CPF</label>
            <input
                    v-model="cpf"
                    @keyup="checkCpf"
                    type="text"
                    class="form-control input-lg"
                    value="{!! old('cpf') ?: $student->cpf !!}"
                    title="Seu CPF ou do responsável"
                    placeholder="CPF"
                    name="cpf"
                    id="cpf"
                    v-mask="'###.###.###-##'"
                    required data-validation-required-message="Por favor digite seu CPF."
            >
            <span class="help-block text-danger" v-if="!cpfValid">CPF INVÁLIDO</span>
        </div>

        <div class="form-group col-12 col-md-4 floating-label-form-group controls">
            <label for="id_number" class="control-label">Identidade</label>
            <input
                    v-model="id_number"
                    type="text"
                    class="form-control input-lg"
                    value="{!! old('id_number') ?: $student->id_number !!}"
                    placeholder="Identidade"
                    name="id_number"
                    id="id_number"
                    required
                    data-validation-required-message="Por favor digite sua identidade."
            >
            <span class="help-block text-danger"></span>
        </div>

        <div class="form-group col-12 col-md-4 floating-label-form-group controls">
            <label for="id_issuer" class="control-label">Órgão emissor</label>
            <input
                    v-model="id_issuer"
                    type="text"
                    class="form-control input-lg"
                    value="{!! old('id_issuer') ?: $student->id_issuer !!}"
                    placeholder="Órgão emissor"
                    name="id_issuer" id="id_issuer"
                    required
                    data-validation-required-message="Por favor digite o órgao emissor."
            >
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Telefone --}}
    <div class="row control-group"  transition="expand">
        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="phone_home" class="control-label">Telefone Residencial</label>
            <input
                    v-model="phone_home"
                    type="tel"
                    class="form-control input-lg"
                    value="{!! old('phone_home') ?: $student->phone_home !!}"
                    placeholder="Telefone Residencial"
                    name="phone_home"
                    id="phone_home"
                    required data-validation-required-message="Por favor digite seu telefone."
            >
            <span class="help-block text-danger"></span>
        </div>

        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="phone_cellular" class="control-label">Telefone Celular</label>
            <input
                    v-model="phone_cellular"
                    type="tel"
                    class="form-control input-lg"
                    value="{!! old('phone_cellular') ?: $student->phone_cellular !!}"
                    placeholder="Telefone Celular"
                    name="phone_cellular"
                    id="phone_cellular"
                    required
                    data-validation-required-message="Por favor digite seu telefone celular."
            >
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- CEP --}}
    <div class="row control-group"  transition="expand">
        <div class="form-group col-lg-12 floating-label-form-group controls">
            <label for="zip_code" class="control-label">CEP da residência</label>
            <input
                    v-on:keyup="checkZip"
                    type="tel"
                    value="{!! old('zip_code') ?: $student->zip_code !!}"
                    class="form-control input-lg"
                    placeholder="CEP da residência"
                    name="zip_code"
                    id="zip_code"
                    required
                    data-validation-required-message="Por favor digite seu CEP."
            >
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Endereço --}}
    <div class="row control-group"  transition="expand">
        <div class="form-group col-lg-12 floating-label-form-group controls">
            <label for="address" class="control-label">Endereço</label>
            <input
                    v-model="address"
                    type="tel"
                    class="form-control input-lg"
                    value="{!! old('address') ?: $student->address !!}"
                    placeholder="Endereço"
                    name="address"
                    id="address"
                    required data-validation-required-message="Por favor digite seu endereço."
            >
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Complemento & Bairro --}}
    <div class="row control-group"  transition="expand">
        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="address_complement" class="control-label">Complemento</label>
            <input
                    v-model="address_complement"
                    type="tel"
                    class="form-control input-lg"
                    value="{!! old('address_complement') ?: $student->address_complement !!}"
                    placeholder="Complemento"
                    name="address_complement"
                    id="address_complement"
                    data-validation-required-message="Por favor digite o complemento."
            >
            <span class="help-block text-danger"></span>
        </div>

        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="address_neighborhood" class="control-label">Bairro</label>
            <input
                    v-model="address_neighborhood"
                    type="tel"
                    class="form-control input-lg"
                    value="{!! old('address_neighborhood') ?: $student->address_neighborhood !!}"
                    placeholder="Bairro"
                    name="address_neighborhood"
                    id="address_neighborhood"
                    required
                    data-validation-required-message="Por favor digite seu bairro."
            >
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Município --}}
    <div class="row control-group"  transition="expand">
        <div class="form-group col-lg-12 floating-label-form-group controls">
            <label for="address_city" class="control-label">Município</label>
            <input
                    v-model="address_city"
                    type="tel"
                    class="form-control input-lg"
                    value="{!! old('address_city') ?: $student->address_city !!}"
                    placeholder="Município"
                    name="address_city"
                    id="address_city"
                    required
                    data-validation-required-message="Por favor digite sua cidade."
            >
            <span class="help-block text-danger"></span>
        </div>
    </div>

    @if (loggedUser()->user && loggedUser()->user->is_administrator)
        {{-- Elected --}}
        <div class="row control-group"  transition="expand">
            <div class="form-group col-lg-4 floating-label-form-group controls">
                <label for="elected_1nd" class="control-label">Eleito no 1o Turno</label>
                <select v-model="elected_1nd" class="form-control input-lg" placeholder="Eleito" name="elected_1nd" id="elected_1nd" data-validation-required-message="Por favor preencha o eleito.">
                    <option value="">ELEITO 1o TURNO</option>

                    <option value="1">
                        SIM
                    </option>

                    <option value="0">
                        NÃO
                    </option>
                </select>
                <span class="help-block text-danger"></span>
            </div>

            <div class="form-group col-lg-4 floating-label-form-group controls">
                <label for="elected_2nd" class="control-label">Eleito no 2o Turno</label>
                <select v-model="elected_2nd" class="form-control input-lg" placeholder="Eleito" name="elected_2nd" id="elected_2nd" data-validation-required-message="Por favor preencha o eleito.">
                    <option value="">ELEITO 2o TURNO</option>

                    <option value="1">
                        SIM
                    </option>

                    <option value="0">
                        NÃO
                    </option>
                </select>
                <span class="help-block text-danger"></span>
            </div>

            <div class="form-group col-lg-4 floating-label-form-group controls">
                <label for="auto_elected" class="control-label">Calcula eleição automaticamente</label>
                <select v-model="auto_elected" class="form-control input-lg" placeholder="Eleito" name="auto_elected" id="auto_elected" data-validation-required-message="Por favor preencha">
                    <option value="">CALCULA AUTOMATICAMENTE</option>

                    <option value="1">
                        SIM
                    </option>

                    <option value="0">
                        NÃO
                    </option>
                </select>
                <span class="help-block text-danger"></span>
            </div>
        </div>
    @endif

    <div id="success"></div>

    <div class="row" transition="expand">
        <div class="form-group col-12 text-right">
            @if (loggedUser()->user->is_administrator)
                <button id="submit" type="submit" class="btn btn-danger">
                    Gravar
                </button>
            @else
                <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block btn-submit-subscription">
                    Enviar inscri&ccedil;&atilde;o
                </button>
            @endif
        </div>
    </div>
</div>

<script>
    window.subscriptionId = {!! $subscription->id !!}
</script>
