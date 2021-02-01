@extends('2017.layouts.layout')

@section('contents')
    <div class="votacao">
        <div>
            <h1>
                {{ $year }} - Eleitos no {{ $round }}&deg; turno
            </h1>

            <br><br>

            <style>
                .table > tbody > tr > td {
                    vertical-align: middle;
                }
            </style>

            <table class="table table-responsive table-bordered">
                <thead>
                    <th>Regional</th>
                    <th>Municípío</th>
                    <th>Unidade escolar</th>
                    <th>Nome</th>

                    @if ($round == 2)
                        <th>Votos válidos</th>
                    @endif

                    @if (Auth::user() && Auth::user()->isAdministrator())
                        <th>Votos</th>
                        <th>Votos regionais</th>
                        <th>Total de votos</th>
                    @endif
                </thead>

                <tbody>
                    @foreach ($elected as $key => $candidate)
                        <tr>
                            @if ($candidate['regionalCount'] > 0)
                                @if ($candidate['regionalCount'] > 1)
                                    <td rowspan="{{ $candidate['regionalCount'] }}">
                                @else
                                    <td>
                                @endif
                                        {{ $candidate['regional'] }}
                                    </td>
                            @endif

                            @if ($candidate['cityCount'] > 0)
                                <td rowspan="{{ $candidate['cityCount'] }}">
                                    {{ $candidate['city'] }}
                                </td>
                            @endif

                            <td>{{ $candidate['school'] }}</td>

                            <td>{{ $candidate['name'] }}</td>

                            @if ($round == 2)
                                <td class="text-right">
                                    @if ($candidate['subscription_votes'] > 0)
                                        {{ number_format($candidate['subscription_votes'] / $candidate['regional_votes'] * 100, 2) }}%
                                    @endif
                                </td>
                            @endif

                            @if (Auth::user() && Auth::user()->isAdministrator())
                                <td class="text-right">
                                    {{ $candidate['subscription_votes'] }}
                                </td>

                                <td class="text-right">
                                    {{ $candidate['regional_votes'] }}
                                </td>

                                <td class="text-right">
                                    {{ $candidate['total_votes'] }}
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
