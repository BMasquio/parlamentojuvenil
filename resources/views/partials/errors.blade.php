<div class="row">
    <div class="col-xs-12">
        @if (count($errors) > 0)
            <br><br><br><br><br><br><br><br>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
