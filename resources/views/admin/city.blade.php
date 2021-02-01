@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Inscrições para {{ $city }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Inscritos
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Escola</th>
                                    <th>Regional</th>
                                    <th>1o Turno</th>
                                    <th>2o Turno</th>
                                    <th>Facebook</th>
                                    <th>Ferramentas</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subscriptions as $person)
                                    <tr class="{{ $person->ignored ? 'danger' : '' }}">
                                        <td>
                                            {{ $person->id }}
                                        </td>

                                        <td>
                                            {{ $person->name }}
                                        </td>

                                        <td>
                                            {{ calculate_age($person->birthdate) }}
                                        </td>

                                        <td>
                                            {{ $person->school }}
                                        </td>

                                        <td>
                                            {{ $person->regional }}
                                        </td>

                                        <td class="text-center">
                                            @if ($person->elected_1nd)
                                                <i class="fa fa-check"></i>
                                            @endif
                                        </td>

                                        <td class="text-center">
                                            @if ($person->elected_2nd)
                                                <i class="fa fa-check"></i>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($person->facebook)
                                                <a href="{{ $person->facebook }}">{{ $person->facebook }}</a>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="/subscriptions/edit/{{ $person->id }}" class="btn btn-warning btn-xs">Editar</a>
                                            <a href="/subscriptions/ignore/{{ $person->id }}" class="btn btn-{{ $person->ignored ? 'success' : 'danger' }} btn-xs">{{ $person->ignored ? 'Reativar' : 'Ignorar' }}</a>
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

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Escolas
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Regional</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($schools as $school)
                                    <tr>
                                        <td>
                                            {{ $school->name }}
                                        </td>

                                        <td>
                                            {{ $school->regional }}
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
