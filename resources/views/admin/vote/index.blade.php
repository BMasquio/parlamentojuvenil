@extends('layouts.admin')

@section('container')
    <div id="vue-admin-elected">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Eleições {{ get_current_year() }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Resumo
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ano</th>
                                                <th>Cidades 1o turno</th>
                                                <th>Cidades 2o turno</th>
                                                <th>Votos válidos 1o turno</th>
                                                <th>Votos válidos 2o turno</th>
                                                <th>Total de Eleitores</th>
                                                <th>% Votante 1o turno</th>
                                                <th>% Votante 2o turno</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    @{{ year }}
                                                </td>

                                                <td>
                                                    @{{ total_cities_1nd }}
                                                </td>

                                                <td>
                                                    @{{ total_cities_2nd }}
                                                </td>

                                                <td>
                                                    @{{ total_valid_votes_1nd }}
                                                </td>

                                                <td>
                                                    @{{ total_valid_votes_2nd }}
                                                </td>

                                                <td>
                                                    @{{ total_voters }}
                                                </td>

                                                <td>
                                                    @{{ voter_percentage_1nd }}
                                                </td>

                                                <td>
                                                    @{{ voter_percentage_2nd }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <a href="{{ route('admin.vote.statistics') }}" class="btn btn-primary">Estatísticas</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Eleitos
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th v-on:click="__changeOrder('name')">
                                            Nome
                                            <div v-show="orderBy == 'name'" class="btn btn-danger btn-xs">
                                                <i class="fa" v-bind:class="_arrowClass"></i>
                                            </div>
                                        </th>

                                        <th v-on:click="__changeOrder('city')">
                                            Cidade
                                            <div v-show="orderBy == 'city'" class="btn btn-danger btn-xs">
                                                <i class="fa" v-bind:class="_arrowClass"></i>
                                            </div>
                                        </th>

                                        <th v-on:click="__changeOrder('birthdate')">
                                            Nascimento
                                            <div v-show="orderBy == 'birthdate'" class="btn btn-danger btn-xs">
                                                <i class="fa" v-bind:class="_arrowClass"></i>
                                            </div>
                                        </th>

                                        <th v-on:click="__changeOrder('registration')">
                                            Matrícula
                                            <div v-show="orderBy == 'registration'" class="btn btn-danger btn-xs">
                                                <i class="fa" v-bind:class="_arrowClass"></i>
                                            </div>
                                        </th>

                                        <th v-on:click="__changeOrder('elected_1nd')">
                                            Eleito 1o T
                                            <div v-show="orderBy == 'elected_1nd'" class="btn btn-danger btn-xs">
                                                <i class="fa" v-bind:class="_arrowClass"></i>
                                            </div>
                                        </th>

                                        <th v-on:click="__changeOrder('votes_1nd')">
                                            Votos 1o T
                                            <div v-show="orderBy == 'votes_1nd'" class="btn btn-danger btn-xs">
                                                <i class="fa" v-bind:class="_arrowClass"></i>
                                            </div>
                                        </th>

                                        <th v-on:click="__changeOrder('elected_2nd')">
                                            Eleito 2o T
                                            <div v-show="orderBy == 'elected_2nd'" class="btn btn-danger btn-xs">
                                                <i class="fa" v-bind:class="_arrowClass"></i>
                                            </div>
                                        </th>

                                        <th v-on:click="__changeOrder('votes_2nd')">
                                            Votos 2o T
                                            <div v-show="orderBy == 'votes_2nd'" class="btn btn-danger btn-xs">
                                                <i class="fa" v-bind:class="_arrowClass"></i>
                                            </div>
                                        </th>

                                        <th v-on:click="__changeOrder('subscriptions_count')">
                                            Capacitação
                                        </th>

                                        <th v-on:click="__changeOrder('subscriptions_count')">
                                            Opções
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr v-for="person in _elected">
                                            <td>
                                                @{{ person.name }}
                                            </td>

                                            <td :class="person.elected_2nd ? 'bg-primary' : 'bg-default'">
                                                @{{ person.city }}
                                            </td>

                                            <div></div>
                                            <td>
                                                @{{ person.birthdate }}
                                            </td>

                                            <td>
                                                @{{ person.registration }}
                                            </td>

                                            <td>
                                                @{{ person.elected_1nd ? 'SIM' : 'NÃO' }}
                                            </td>

                                            <td>
                                                @{{ person.votes_1nd }}
                                            </td>

                                            <td :class="person.elected_2nd ? 'bg-primary' : 'bg-default'">
                                                @{{ person.elected_2nd ? 'SIM' : 'NÃO' }}
                                            </td>

                                            <td>
                                                @{{ person.votes_2nd }}
                                            </td>

                                            <td>
                                                <a v-if="person.quiz_result.length > 0" :href="'/admin/training/'+person.subscription_id" class="btn btn-info btn-xs btn-block">Ver</a>
                                                <div v-if="person.quiz_result.length == 0">NÃO INICIADA</div>
                                            </td>

                                            <td>
                                                <a :href="__makeEditPersonUrl(person.subscription_id)" class="btn btn-warning btn-xs">Editar</a>
                                                <a :href="__makeShowVotesUrl(person.subscription_id)" class="btn btn-primary btn-xs">Votos</a>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
    </div>
@stop
