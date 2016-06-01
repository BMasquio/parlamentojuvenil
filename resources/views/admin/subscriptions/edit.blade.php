@extends('layouts.admin')

@section('container')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $subscription->name }}</h1>
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
                                <form method="POST" id="subscribe" action="{{ route('subscriptions.edit', ['id' => $subscription->id])}}">
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
