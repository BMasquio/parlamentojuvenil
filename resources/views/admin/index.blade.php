@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Inscrições (@{{ validSubscriptionsCount }})</h1>
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
                        <div class="col-lg-12">
                            @include('admin.partials.summary')

                            <a href="/subscriptions/download" class="btn btn-primary">Baixe a planilha completa</a>

                            <div v-show="!filterSchools" v-on:click="__clickFilterSchools" class="btn btn-danger">Mostrar municípios com mais de uma escola</div>
                            <div v-show="filterSchools"  v-on:click="__clickFilterSchools" class="btn btn-success">Mostrar todos os municípios</div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th v-on:click="__changeOrder('subscriptions_count')" class="text-right">
                                    Inscrições
                                    <div v-show="orderBy == 'subscriptions_count'" class="btn btn-danger btn-xs">
                                        <i class="fa" v-bind:class="_arrowClass"></i>
                                    </div>
                                </th>

                                <th v-on:click="__changeOrder('city_name')">
                                    Município
                                    <div v-show="orderBy == 'city_name'" class="btn btn-danger btn-xs">
                                        <i class="fa" v-bind:class="_arrowClass"></i>
                                    </div>
                                </th>

                                <th v-on:click="__changeOrder('schools_count')">
                                    Escolas
                                    <div v-show="orderBy == 'schools_count'" class="btn btn-danger btn-xs">
                                        <i class="fa" v-bind:class="_arrowClass"></i>
                                    </div>
                                </th>

                                <th v-on:click="__changeOrder('last_subscription')">
                                    Data/hora última inscrição
                                    <div v-show="orderBy == 'last_subscription'" class="btn btn-danger btn-xs">
                                        <i class="fa" v-bind:class="_arrowClass"></i>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="city in _cities" track-by="city">
                                <tr>
                                    <td class="text-right" v-bind:class="_getSubscriptionCountClass(city)">
                                        @{{ city.subscriptions_count || '' }}
                                    </td>

                                    <td v-bind:class="_getSubscriptionCountClass(city)">
                                        <a v-bind:href="__getCityLink(city)">@{{ city.city_name }}</a>
                                    </td>

                                    <td v-bind:class="_getSubscriptionCountClass(city)">
                                        @{{ city.schools_count > 0 ? city.schools_count : '' }}
                                    </td>

                                    <td v-bind:class="_getSubscriptionCountClass(city)">
                                        @{{ city.last_subscription }}
                                    </td>
                                </tr>
                            </template>
                            <tr>
                                <td>
                                    <strong>TOTAL</strong>
                                </td>

                                <td></td>

                                <td></td>

                                <td class="text-right">
                                    @{{ validSubscriptionsCount }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

