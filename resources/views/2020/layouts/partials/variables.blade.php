{{ csrf_field() }}

<script>
    window.laravel = {
        _token: '{{ csrf_token() }}',
        loggedUser: JSON.parse('{!! $loggedUserJson ?? '' !!}')
    };
</script>
