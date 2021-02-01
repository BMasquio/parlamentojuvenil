@extends( get_current_year().'.layouts.layout')

@section('contents')
    <div class="row">
        <div class="offset-md-4 col-md-4">
            <div class="title identify-yourself">
                <h1 class="identify-title">
                    @yield('page-title')
                </h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            @yield('page-contents')
        </div>
    </div>
@stop
