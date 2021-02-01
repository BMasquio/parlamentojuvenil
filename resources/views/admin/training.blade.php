@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $name }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Listagem dos itens de capacitação vistos/respondidos pelo parlamentar juvenil
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Documento / Vídeo / Quiz</th>
                                    <th>Resposta</th>
                                    <th>Gabarito</th>
                                    <th>Resultado</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($watched as $course)
                                        @if(isset($course['title']))
                                            <tr>
                                                <td>
                                                    {{ $course['title'] }}
                                                </td>

                                                <td>
                                                    {{ $course['answer'] }}
                                                </td>

                                                <td>
                                                    {{ $course['correct_answer'] }}
                                                </td>

                                                <td>
                                                    @if (!empty($course['correct_answer']) && $course['correct_answer'] == $course['answer'])
                                                        correta
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
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
