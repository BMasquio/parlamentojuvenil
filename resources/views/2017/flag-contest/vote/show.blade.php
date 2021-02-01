@extends('2017.layouts.layout')

@section('contents')
    <section id="header-capacitacao" class="capacitacao-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>O SEU VOTO ESTÁ REGISTRADO</h2>
                    <br><br>
                    <p>Aluno: <strong>{{ $student_name }}</strong></p>
                    <p>Matrícula: <strong>{{ $student_registration }}</strong></p>
                    <p>Data e hora: <strong>{{ $date_time }}</strong></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <br>
                <br>

                <div class="colors-panel-body supernova-yellow text-center" style="padding: 40px;">
                    <img class="img-responsive img-center" src="{{ $thumbnail_url }}" width="400px" style="margin: 0 auto;">
                </div>
            </div>
        </div>
    </section>
@stop
