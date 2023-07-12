@if (Request::segment(1) == 'student')
@extends('layouts.panel')
@endif

@section('title') Update Password @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0">
        <span class="h4 text-dark fw-bold">Update Password</span>
    </div>

    @include('components.alert')

    <form method="post" action="{{ route('update_password') }}" class="mt-4">
        @csrf
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="form-group">
                    <label class="form-label" for="current_password">Old Password:</label>
                    <input class="form-control" type="password" id="current_password" name="current_password" required>
                    <span class="text-muted font-size-12">Minimum of 8 characters</span>
                    @error('current_password')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">New Password:</label>
                    <input class="form-control" type="password" id="password" name="password" minlength="8" required>
                    <span class="text-muted font-size-12">Minimum of 8 characters</span>
                    @error('password')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Confirm New Password:</label>
                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation"
                        required>
                    @error('password_confirmation')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mt-4 pt-4">
                    <button class="btn btn-success" type="submit">Update Password</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection