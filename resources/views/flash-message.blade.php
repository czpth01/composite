@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
	<button type="button" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
 <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif