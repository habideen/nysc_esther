@extends('layouts.auth')


@section('content')
<div class="container content">
    <div id="login_wrapper"><a href="/"></a>
        <div id="login_form" class="text-start text-dark pt-4 pb-4">
            <div id="form_heading" class="p-3"><span class="h4 text-dark fw-bold">Change Password</span></div>
            <form class="mt-4">
                <div class="form-group"><label class="form-label">Old Password:</label><input class="form-control"
                        type="password"><span class="text-muted font-size-12">Minimum of 8 characters</span></div>
                <div class="form-group"><label class="form-label">New Password:</label><input class="form-control"
                        type="password"><span class="text-muted font-size-12">Minimum of 8 characters</span></div>
                <div class="form-group"><label class="form-label">Confirm New Password:</label><input
                        class="form-control" type="password"></div>
                <div class="form-group mt-4 pt-4"><button class="btn btn-success" type="button">Update
                        Password</button></div>
            </form>
        </div>
    </div>
</div>
@endsection