@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Incrições por escolas</h1>
            </div>
        </div>
    
        <div class="row">
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
                                        <th>Escola</th>
                                        <th>Cidade</th>
                                        <th>Inscrições</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($schools as $school)
                                        <tr>
                                            <td>
                                                {{ $school->school }}
                                            </td>
                                            <td>
                                                {{ $school->city }}
                                            </td>
                                            <td>
                                                {{ $school->schoolcount }}
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
