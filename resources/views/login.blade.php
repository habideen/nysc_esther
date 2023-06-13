@extends('layouts.auth')


@section('content')
<div class="container content">
    <div id="login_wrapper"><a href="/"><img class="img-fluid"
                src="/assets/img/banner1.png?h=d40c9ae1f52dad1d312039d01fceb5cb"></a>
        <div id="login_form" class="text-start text-dark">
            <div id="form_heading" class="p-3"><span class="h4 text-dark fw-bold">Existing User Login</span></div>
            <form class="mt-4">
                <div class="form-group"><label class="form-label fw-bold"><i class="fas fa-envelope me-2"></i>Email
                        Address:</label><input class="form-control" type="email"></div>
                <div class="form-group"><label class="form-label fw-bold"><i
                            class="fas fa-envelope me-2"></i>Password:</label><input class="form-control"
                        type="password"></div>
                <div class="form-group text-end"><button class="btn btn-success" type="button">Resume</button></div>
                <div class="form-group"><a class="blue-link" href="/forgot_password">Forgot Password or
                        E-mail?</a></div>
            </form>
        </div>
    </div>
</div>
@endsection