<h1>Parlamento Juvenil - Concurso da Bandeira</h1>

<h2>Por favor confirme sua inscrição no concurso clicando no link abaixo:</h2>

<h4>
    <a href="{{ $route = route('flag-contest.confirm.email', ['confirmation_key' => $subscription->confirmation_key, 'email' => $subscription->email]) }}">{{ $route }}</a>
</h4>

<p>
    Obrigado,
</p>

<p>
    Parlamento Juvenil
</p>
