@extends('layouts.auth')


@section('content')
<div class="container content">
    <div id="login_wrapper"><a href="/"></a>
        <a href="/">
            <img class="img-fluid" src="/assets/img/banner1.png?h=d40c9ae1f52dad1d312039d01fceb5cb"></a>
        <div id="login_form" class="text-start text-dark pt-4 pb-4">
            <div id="form_heading" class="p-3">
                <span class="h4 text-dark fw-bold">Change Password</span>
            </div>
            <form class="mt-4" method="POST" accept="/reset_password/{email_base64}/{token}">
                @csrf
                <div class="form-group">
                    <label class="form-label">New Password:</label>
                    <input class="form-control" type="password" name="new_password" id="new_password"
                        placeholder="Enter new password here">
                    <span class="text-muted font-size-12">Minimum of 8 characters</span>
                </div>
                <div class="form-group">
                    <label class="form-label">Confirm New Password:</label>
                    <input class="form-control" type="password" name="confirm_password" class="form-control"
                        placeholder="Enter confirm password here">
                </div>
                <div class="form-group mt-4 pt-4">
                    <button class="btn btn-success" type="submit">Update Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection