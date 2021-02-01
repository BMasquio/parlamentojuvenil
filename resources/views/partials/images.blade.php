@extends('layouts.layout')

@section('contents')
    @foreach($links as $name => $link)
        <img data-original="{!! make_image_url($link) !!}" alt="{{ $name }}" class="lazy" />
    @endforeach
@stop

