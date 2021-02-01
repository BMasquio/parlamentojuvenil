@extends( get_current_year().'.layouts.layout')

@section('contents')
    <div class="votacao">
        <div class="container">
            <div class="row">
                <div class="col-12">

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
                    </div>

                    @if ($candidates->count() == 1)

                        <h3 class="text-center">O seguinte candidato(a) foi eleito(a)</h3>

                        <div class="row vote">
                            <div class="offset-1 col-10 offset-md-4 col-md-4">
                                @include(get_current_year().'.vote.partials.candidate', ['candidate' => $candidates[0], 'is_elected' => true])
                            </div>
                        </div>
                    @endif

                    @if ($candidates->count() > 1)
                        <div class="row vote card-deck mt-5">
                            <div class="col-lg-2">

                            </div>

                            @foreach($candidates as $candidate)
                                <div class="col-12 col-md-6  col-lg-4">
                                    @include(get_current_year().'.vote.partials.candidate', ['candidate' => $candidate])
                                </div>
                            @endforeach
                        </div>

                    @endif

                </div>
            </div>
        </div>

    </div>
@stop
