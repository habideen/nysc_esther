@extends('layouts.auth')


@section('content')
<div class="container content">
    <div class="row justify-content-center mt-80 mb-80">
        <div class="col-12 mt-50 text-center"><a href="/"><img class="img-fluid"
                    src="/assets/img/banner1.png?h=d40c9ae1f52dad1d312039d01fceb5cb"></a></div>
        <div class="col-12 col-sm-7 col-md-8 col-lg-5 bg-white p-3">
            <div id="login_wrappers">
                <div id="login_form" class="text-start text-dark">
                    <div id="green_header" class="p-2"><span class="h4 text-dark fw-bold">Initiate Account
                            Creation</span></div>
                    <p class="mt-4">Your email address has been saved and a confirmation mail has been sent to you
                        (view inbox and spam folder). Confirm email by clicking on the link in the mail to continue
                        your account creation.</p>
                    <form class="mt-4">
                        <div class="form-group mt-5">
                            <h1 class="text-danger text-center h3">Important Notice!</h1>
                            <hr class="mt-1">
                            <p>You are advised to create an account with a valid email address because all vital
                                information will be sent to the mail supply</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection