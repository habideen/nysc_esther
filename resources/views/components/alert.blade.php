@if(Session::has('fail'))
<div class="alert alert-danger mt-4 mb-4">{!! Session::get('fail') !!}</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success mt-4 mb-4">{!! Session::get('success') !!}</div>
@endif