@extends('layouts.admin')

@section('container')
    <div id="vue-admin-contest">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Concurso da Bandeira - Inscritos</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>
                            Inscritos: @{{ subscriptions.length }}
                        </span>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Inscrição</th>
                                    <th>Matrícula</th>
                                    <th>Nome</th>
                                    <th>Municipio</th>
                                    <th>Escola</th>
                                    <th>Regional</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="subscription in subscriptions">
                                    <td class="text-center">@{{ subscription.id }}</td>
                                    <td class="text-center">@{{ subscription.student.registration }}</td>
                                    <td class="text-center">@{{ subscription.student.name }}</td>
                                    <td class="text-center">@{{ subscription.student.city }}</td>
                                    <td class="text-center">@{{ subscription.student.school }}</td>
                                    <td class="text-center">@{{ subscription.student.regional }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
