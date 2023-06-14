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
                    <p class="mt-4">The following domain <span class="text-danger">(yahoo.com, yahoo.co.uk,
                            ymail.com, rocketmail.com)</span>&nbsp;may encounter delay in mail delivery. You are
                        advised to use other e-mail providers.</p>

                    @if(Session::has('fail'))
                    <div class="alert alert-danger mt-4">{{Session::get('fail')}}</div>
                    @endif
                    @if(Session::has('success'))
                    <div class="alert alert-success mt-4">{{Session::get('success')}}</div>
                    @endif

                    <form method="POST" action="/register" class="mt-4">
                        @csrf

                        <div class="form-group">
                            <label class="form-label">Email Address:</label>
                            <input class="form-control" type="email" id="email" name="email" value="{{old('email')}}">
                            @error('email')
                            <span class="text-danger d-block font-size-14 fw-normal" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password:</label>
                            <input class="form-control" type="password" id="password" name="password" required>
                            @error('password')
                            <span class="text-danger d-block font-size-14 fw-normal" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirm Password:</label>
                            <input class="form-control" type="password" id="password_confirmation"
                                name="password_confirmation" required>
                            @error('password_confirmation')
                            <span class="text-danger d-block font-size-14 fw-normal" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mt-4 pt-4">
                            <label class="form-label">Security Question:</label>
                            <select class="form-select" id="security_question" name="security_question" required>
                                <option value=""></option>
                                <option value="Which city did your parents meet?">Which city did your parents meet?
                                </option>
                                <option value="What is the name of your first pet?">What is the name of your first pet?
                                </option>
                            </select>
                            @error('security_question')
                            <span class="text-danger d-block font-size-14 fw-normal" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Answer:</label>
                            <input class="form-control" type="password" id="security_answer" name="security_answer"
                                maxlength="50" required>
                            @error('security_answer')
                            <span class="text-danger d-block font-size-14 fw-normal" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirm Answer:</label>
                            <input class="form-control" type="password" id="security_answer_confirmation"
                                name="security_answer_confirmation" maxlength="50" required>
                            @error('security_answer')
                            <span class="text-danger d-block font-size-14 fw-normal" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success" type="submit">Continue<i
                                    class="fas fa-angle-double-right ms-2"></i></button>
                        </div>
                        <div class="form-group">
                            <p><a class="blue-link" href="/login">Proceed to login</a>&nbsp;if you have created
                                account/registered in the previous batch but was not mobilized or did not go to camp
                            </p>
                        </div>
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


@section('script')
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $('#security_question').val("{{old('security_question')}}")
</script>
@endsection