@if (Request::segment(1) == 'student')
@extends('layouts.student')
@endif

@section('title') Update Password @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0">
        <span class="h4 text-dark fw-bold">Update Password</span>
    </div>
    <form class="mt-4">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Old Password:</label>
                    <input class="form-control" type="password">
                    <span class="text-muted font-size-12">Minimum of 8 characters</span>
                </div>
                <div class="form-group">
                    <label class="form-label">New Password:</label>
                    <input class="form-control" type="password">
                    <span class="text-muted font-size-12">Minimum of 8 characters</span>
                </div>
                <div class="form-group">
                    <label class="form-label">Confirm New Password:</label>
                    <input class="form-control" type="password">
                </div>
                <div class="form-group mt-4 pt-4">
                    <button class="btn btn-success" type="button">Update Password</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection