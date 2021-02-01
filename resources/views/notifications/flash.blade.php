@foreach($errors as $message)
    @include(
        'notifications.message',
        [
            'kind' => $message['kind'],
            'icon' => $message['icon'],
            'title' => $message['title'],
            'message' => $message['message'],
        ]
    )
@endforeach
