@extends('layouts.admin')

@section('container')
    <div id="vue-admin-seeduc">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Busca Seeduc</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-8">
                                Digite os dados abaixo
                            </div>

                            <div class="col-sm-4 text-right">
                                <form enctype="multipart/form-data" novalidate>
                                    <div class="dropbox">
                                        <input
                                            type="file"
                                            name="file"
                                            :disabled="isUploading"
                                            @change="filesChange($event.target.name, $event.target.files); fileCount = $event.target.files.length"
                                            accept=".csv"
                                            class="input-file"
                                        >

                                        <p v-if="!isUploading && !error && !wasUploaded">
                                            Importar arquivo de alunos
                                        </p>

                                        <p v-if="wasUploaded">
                                            Importado com sucesso!
                                        </p>

                                        <p v-if="error">
                                            @{{ error }}
                                        </p>

                                        <p v-if="isUploading">
                                            <i class="fa fa-cog fa-spin"></i> Importando...
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row control-group" transition="expand">
                            <div class="form-group col-lg-6 floating-label-form-group controls">
                                <label for="matricula" class="sr-only control-label">Matrícula</label>
                                <input
                                    v-model="registration"
                                    @keyup.enter="__search"
                                    class="form-control input-lg"
                                    placeholder="Matrícula"
                                >
                            </div>

                            <div class="form-group col-lg-6 floating-label-form-group controls">
                                <label for="birthdate" class="sr-only control-label">Data de Nascimento</label>
                                <input
                                    v-model="birthdate"
                                    @keyup.enter="__search"
                                    class="form-control input-lg"
                                    placeholder="Data de nascimento"
                                >
                            </div>
                        </div>

                        <div class="row control-group" transition="expand">
                            <div class="form-group col-lg-12 floating-label-form-group controls">
                                <label for="name" class="sr-only control-label">Nome</label>
                                <input
                                    v-model="name"
                                    @keyup.enter="__search"
                                    class="form-control input-lg"
                                    placeholder="Nome"
                                >
                            </div>
                        </div>

                        <div class="row"  transition="expand">
                            <div class="form-group col-xs-12">
                                <button @click="__search" class="btn btn-lg btn-primary btn-block btn-submit-subscription" v-bind:disabled="searching">
                                    Procurar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>
                            Encontrados: @{{ students.length }}
                        </span>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Matrícula</th>
                                    <th>Nascimento</th>
                                    <th>Nome</th>
                                    <th>Municipio</th>
                                    <th>Escola</th>
                                    <th>Regional</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="student in students">
                                    <td class="text-center">@{{ student.matricula }}</td>
                                    <td class="text-center">@{{ student.nascimento }}</td>
                                    <td class="text-center">@{{ student.nome }}</td>
                                    <td class="text-center">@{{ student.municipio }}</td>
                                    <td class="text-center">@{{ student.escola }}</td>
                                    <td class="text-center">@{{ student.regional }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
