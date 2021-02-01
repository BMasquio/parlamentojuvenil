<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th class="text-center">Inscrições válidas</th>
            <th class="text-center">Municípios inscritos</th>
            <th class="text-center">Municípios não-inscritos</th>
            <th class="text-center">Canceladas/Duplicadas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center">@{{ validSubscriptionsCount }}</td>
            <td class="text-center">@{{ citiesInCount }}</td>
            <td class="text-center">@{{ citiesOutCount }}</td>
            <td class="text-center">@{{ cancelledSubscriptionsCount }}</td>
        </tr>
    </tbody>
</table>
