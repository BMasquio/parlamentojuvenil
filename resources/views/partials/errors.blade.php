
<div class="row">
        <div class="offset-1 col-10 ">
            @if (count($errors) > 0)
                    <div class="alert alert-danger text-center ">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
            @endif
        </div>
</div>

