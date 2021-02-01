@extends('layouts.admin')

@section('container')
    <div id="vue-vote-statistics">
        <div class="row">
            <div class="col-xs-11">
                <h1 class="page-header">Eleições {{ get_current_year() }} - Estatísticas - @{{ totalVotes }} votos</h1>
            </div>
            <div class="col-xs-1" v-if="busy">
                <h1 class="page-header"><i class="fa fa-refresh fa-spin" style="font-size:24px"></i></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Por Hora
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Dia / Hora</th>
                                                <th>Votos</th>
                                                <th>% do total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr v-for="city in _byTime">
                                                <td>
                                                    @{{ city.date_time }}
                                                </td>

                                                <td>
                                                    @{{ city.time_votes }}
                                                </td>

                                                <td>
                                                    @{{ city.percentage }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
                        Por cidade
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th v-on:click="__changeOrderCity('city')">
                                            Cidade
                                            <div v-show="cityOrderBy == 'city'" class="btn btn-danger btn-xs">
                                                <i class="fa" v-bind:class="_arrowClass"></i>
                                            </div>
                                        </th>

                                        <th v-on:click="__changeOrderCity('city_votes')">
                                            Votos
                                            <div v-show="cityOrderBy == 'city_votes'" class="btn btn-danger btn-xs">
                                                <i class="fa" v-bind:class="_arrowClass"></i>
                                            </div>
                                        </th>

                                        <th v-on:click="__changeOrderCity('percentage')">
                                            Percentual
                                            <div v-show="cityOrderBy == 'percentage'" class="btn btn-danger btn-xs">
                                                <i class="fa" v-bind:class="_arrowClass"></i>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="city in _byCity">
                                        <td>
                                            @{{ city.city }}
                                        </td>

                                        <td>
                                            @{{ city.city_votes }}
                                        </td>

                                        <td>
                                            @{{ city.percentage }}
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
