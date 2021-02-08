<!DOCTYPE html>
<html lang="pt_br"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />

        @if (isset($html_title))
            <title>{{ $html_title }}</title>
        @endif

		<meta name="keywords" content="{!! $html_keywords ?? '' !!}" />
		<meta name="description" content="{!! $html_description ?? '' !!}" />
		<meta name="Author" content="{!! $html_author ?? '' !!}" />

		@if (isset($html_meta_tags))
		    @foreach ($html_meta_tags as $meta)
		        {!! $meta !!}
		    @endforeach
		@endif

        @if (isset($html_viewport))
		    <!-- mobile settings -->
		    <meta name="viewport" content="{!! $html_viewport !!}" />
		@endif

		@yield('html.head')
	</head>

	<body>
		@yield('html.body')

		@yield('html.footer')

        @include('partials.livereload')
	</body>
</html>
