<!-- scripts.blade.php -->

<script src="//cdn.jsdelivr.net/masonry/2.1.08/jquery.masonry.min.js"></script>
<script src="//cdn.jsdelivr.net/jquery.lazyload/1.8.4/jquery.lazyload.js"></script>

<script>
    jQuery(document).ready(function() {
        var $container = $('#masonry-container');
        $container.imagesLoaded(function () {
            $container.masonry({
                itemSelector: '.item',
                containerStyle: { position: 'relative' },
                columnWidth: function (containerWidth) {
                    return containerWidth / 12;
                }
            });
            $('.item img').addClass('not-loaded');
            $('.item img.not-loaded').lazyload({
                effect: 'fadeIn',
                load: function () {
                    // Disable trigger on this image
                    $(this).removeClass("not-loaded");
                    $container.masonry('reload');
                }
            });
            $('.item img.not-loaded').trigger('scroll');
        });
    });
</script>

{{--<script>--}}
    {{--//Countdown js--}}
    {{--$("#countdown").countdown({--}}
        {{--date: "21 may 2016 12:43:19",--}}
        {{--format: "on"--}}
    {{--},--}}

    {{--function() {--}}
        {{--// callback function--}}
    {{--});--}}
{{--</script>--}}

@include('scripts.mask')
@include('scripts.vueAdmin')
@include('scripts.vueAdminElected')
@include('scripts.vueAdminContest')
@include('scripts.vueAdminContestVotes')
{{--@include('scripts.vueSubscribe')--}}
@include('scripts.vueCongressmen')
@include('scripts.vueSeeduc')
@include('scripts.vueUsers')
@include('scripts.vueFilters')
@include('scripts.vueGallery')
@include('scripts.vueMap')
@include('scripts.vueSchools')
@include('scripts.vueVoteStatistics')
@include('scripts.vueTimeline')
@include('scripts.helpers')

@if (! isset($exceptFiles['owl']))
    @include('scripts.owl')
@endif

@if (! isset($exceptFiles['pinboard']))
    @include('scripts.pinboard')
@endif
