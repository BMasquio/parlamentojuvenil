<?php
    $count = 1;
    $photoCount = 1;
    $max = 12;
    $current = 0;
?>

<div class="row">
    @foreach (range($current, $current+$max-1) as $index)
        @if (isset($images[$index]))
            {{--@include('partials.gallery-photo', ['photo' => $images[$index]])--}}

            <div class="col-sm-6 col-md-4 item">
                <a href="{{ $images[$index]['image'] }}" title="{{ $images[$index]['heading'] }}" class="portfolio-link gallery-link" data-gallery>
                    <img src="{{ $images[$index]['image'] }}" class="img-responsive" data-original="{{ $images[$index]['image'] }}">
                </a>
            </div>

            <?php
                $current++;
            ?>
        @endif
    @endforeach
</div>

@if (count($images) > $max)
    {{--<button type="button" class="btn btn-danger" v-on:click="__show('{{ $kind }}')">Mais fotos</button>--}}
{{--    <div class="row text-center rodapegaleria" id="more-gallery-{{ $kind }}-button">
        <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
        <div class="col-md-2 col-xs-12"><div class="quadro-vermelho borda-preta">Mais fotos</div></div>
        <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
    </div>--}}

    <!-- more gallery -->
    <div class="row" id="more-gallery-{{ $kind }}" style="display:none">
        @foreach (range($current, count($images)+1) as $index)
            @if (isset($images[$index]))
                @include('partials.gallery-photo', ['photo' => $images[$index]])
            @endif
        @endforeach
    </div>
@endif
