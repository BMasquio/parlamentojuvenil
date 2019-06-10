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
                        <br><br>
                        <h1 class="text-center">O seguinte candidato(a) foi eleito(a)</h1>
                        <br><br>

                        <div class="row vote">
                            <div class="col-6">
                                @include(get_current_year().'.vote.partials.candidate', ['candidate' => $candidates[0], 'is_elected' => true])
                            </div>
                        </div>
                    @endif

                    @if ($candidates->count() > 1)
                        <div class="row vote card-deck">
                            <div class="col-1">

                            </div>

                            @foreach($candidates as $candidate)
                                <div class="col-5">
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
