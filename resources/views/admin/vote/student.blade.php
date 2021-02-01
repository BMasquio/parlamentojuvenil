@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Eleições {{ get_current_year() }}</h1>

                <h3>Votos para {{ $subscription->student->name }}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Votos
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Matrícula</th>
                                        <th>Nascimento</th>
                                        <th>Cidade</th>
                                        <th>Escola</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($votes as $person)
                                        <tr>
                                            <td>
                                                {{ $person->student_name }}
                                            </td>

                                            <td>
                                                {{ $person->student_registration }}
                                            </td>

                                            <td>
                                                {{ $person->student_birthdate }}
                                            </td>

                                            <td>
                                                {{ $person->student_city }}
                                            </td>

                                            <td>
                                                {{ $person->student_school }}
                                            </td>
                                        </tr>
                                    @endforeach
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
