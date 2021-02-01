@extends('layouts.admin')

@section('container')
    <div id="vue-admin-contest-votes">
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
                            Votos: @{{ total_vote_count }}
                        </span>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>id #</th>
                                    <th>Bandeira</th>
                                    <th>Regional</th>
                                    <th>Votos válidos</th>
                                    <th>Votos não válidos</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="flag in sorted_flags">
                                    <td class="text-center" style="font-size: 2em;">@{{ flag.id }}</td>
                                    <td class="text-center"><img :src="flag.thumbnail_url" alt="" width="200px"></td>
                                    <td class="text-center" style="font-size: 2em;">@{{ flag.name }}</td>
                                    <td class="text-center" style="font-size: 2em;">@{{ flag.valid_vote_count }}</td>
                                    <td class="text-center" style="font-size: 2em;">@{{ flag.invalid_vote_count }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
