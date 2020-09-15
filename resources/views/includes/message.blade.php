@if ($errors->any())
    <div class="alert alert-outline-danger alert-dismissible alert-round" role="alert">
        <div class="alert-icon" data-dismiss="alert">
            <i class="icon-close"></i>
        </div>
        <div class="alert-message">
            <span><strong>Error !</strong>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </span>
        </div>
    </div>
@endif

@if(Session::has('message'))
    <div class="alert alert-outline-{{ Session::get('type') }} alert-dismissible alert-round" role="alert">
        <div class="alert-icon"  data-dismiss="alert">
            <i class="icon-close"></i>
        </div>
        <div class="alert-message">
            <span>{{ Session::get('message') }}</span>
        </div>
    </div>
@endif


