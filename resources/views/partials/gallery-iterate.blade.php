<?php

    $count = 1;
    $photoCount = 1;
    $max = 10;
    $current = 0;

?>

<div class="row">
    @foreach (range($current, $current+$max-1) as $index)
        @if (isset($images[$index]))
            @include('partials.gallery-photo', ['photo' => $images[$index]])

            <?php
                $current++;
            ?>
        @endif
    @endforeach
</div>

@if (count($images) > $max)
    <div class="row" id="more-gallery-{{ $kind }}-button">
        <div class="row text-center" style="margin: 20px;">
            <button type="button" class="btn btn-danger" v-on:click="__show('{{ $kind }}')">Mais fotos</button>
        </div>
    </div>

    <!-- more gallery -->
    <div class="row" id="more-gallery-{{ $kind }}" style="display:none">
        @foreach (range($current, count($images)+1) as $index)
            @if (isset($images[$index]))
                @include('partials.gallery-photo', ['photo' => $images[$index]])
            @endif
        @endforeach
    </div>
@endif
