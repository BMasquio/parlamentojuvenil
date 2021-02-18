<!-- scripts.blade.php -->




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



@if (! isset($exceptFiles['owl']))
    @include('scripts.owl')
@endif

@if (! isset($exceptFiles['pinboard']))
    @include('scripts.pinboard')
@endif
