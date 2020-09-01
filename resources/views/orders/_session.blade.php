@if ($message = Session::get('success'))
<div class="widget-body">
    <div class="widget-main">
        <p class="alert alert-success">
            {{$message}}
        </p>
    </div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="widget-body">
    <div class="widget-main">
        <p class="alert alert-warning">
            {{$message}}
        </p>
    </div>
</div>
@endif

@if ($message = Session::get('danger'))
<div class="widget-body">
    <div class="widget-main">
        <p class="alert alert-danger">
            {{$message}}
        </p>
    </div>
</div>
@endif