@extends('2017.layouts.layout')

@section('contents')
    <div class="votacao">
        <div class="text-center">
            <h1>
                Olá {{ loggedUser()->student->name }},
            </h1>

            <h1>
                @if ($candidates->count() > 1)
                    escolha e vote em seu candidato
                @endif

                @if ($candidates->count() <= 1)
                    não haverá segundo turno na sua cidade.
                @endif
            </h1>

            <br><br>
            <h1 class="text-center">O seguinte candidato(a) foi eleito(a)</h1>
            <br><br>

            <h2 class="vote-cidade">{{ loggedUser()->student->city }}</h2>
        </div>

        @if ($candidates->count() == 1)
            <div class="row vote">
                <div class="col-xs-12 col-sm-offset-4 col-sm-4">
                    @include(get_current_year().'.vote.partials.candidate', ['candidate' => $candidates[0], 'is_elected' => true])
                </div>
            </div>
        @endif

        @if ($candidates->count() > 1)
            <div class="row vote">
                @foreach($candidates as $candidate)
                    <div class="col-xs-12 col-sm-4">
                        @include(get_current_year().'.vote.partials.candidate', ['candidate' => $candidate])
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@stop
