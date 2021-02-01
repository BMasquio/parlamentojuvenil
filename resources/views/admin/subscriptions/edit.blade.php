@extends('layouts.admin')

@section('container')
    <div>
        <div class="row">
            <div class="col-lg-11">
                <h1 class="page-header">{{ $student->name }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Perfis sociais
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    @foreach($student->socialUsers as $socialUser)
                                        <div class="col-xs-3">
                                            <div class="well">
                                                <a href="{{ $socialUser->profileUrl }}">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <img
                                                                src="{{ $socialUser->user->avatar }}"
                                                                class="img-responsive"
                                                                alt=""
                                                                width="80px"
                                                            >
                                                        </div>

                                                        <div class="col-xs-6">
                                                            <img
                                                                src="/templates/{{ get_current_year() }}/assets/img/socialbtn-{{ $socialUser->socialNetwork->slug }}.png"
                                                                class="img-responsive"
                                                                alt=""
                                                                width="80px"
                                                            >
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar dados da inscrição
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" id="vue-subscribe" action="{{ route('subscriptions.edit', ['id' => $subscription->id])}}">
                                {!! csrf_field() !!}

                                @include('partials.subscribe-form-fields')

                                {{--<pre>@{{ $data | json }}</pre>--}}
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    </div>
@stop

@section('page-javascripts')
    @include('scripts.vueSubscribe')
@stop

