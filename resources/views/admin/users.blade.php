@extends('layouts.admin')

@section('container')
    <div id="vue-admin-users">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Usuários</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Digite os dados abaixo
                    </div>

                    <div class="panel-body">
                        <div class="row control-group" transition="expand">
                            <div class="form-group col-lg-6 floating-label-form-group controls">
                                <label for="email" class="sr-only control-label">email</label>
                                <input
                                    v-model="email"
                                    @keyup.enter="__search"
                                    class="form-control input-lg"
                                    placeholder="E-mail"
                                >
                            </div>

                            <div class="form-group col-lg-6 floating-label-form-group controls">
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
                            Encontrados: @{{ users.length }}
                        </span>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Nome</th>
                                    <th>Apelido</th>
                                    <th>Rede Social</th>
                                    <th>Avatar</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="user in users">
                                    <td class="text-center">@{{ user.email }}</td>
                                    <td class="text-center">@{{ user.name }}</td>
                                    <td class="text-center">@{{ user.nickname }}</td>
                                    <td class="text-center">@{{ user.social_network }}</td>
                                    <td class="text-center"><img :src="user.avatar" alt=""></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
