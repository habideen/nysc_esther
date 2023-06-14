@extends('layouts.email')

@section('title') Reset password @endsection

@section('content')
    <div class="head">
        <img src="{{ env('APP_URL') }}/assets/images/logo-dark.png" alt="{{ env('APP_NAME') }} logo">
    </div>
    <div class="content">
        <p>Hello,</p>
        <p>We received a request to reset your password and we want to confirm that it's really you.</p>
        <p>You should ignore this email if it wasn't you.</p>
        <p class="reset-p">
            <a href="{{ $url_data }}" class="reset-pwd">Click here to reset password</a>
        </p>
        <p>or copy the link below to your browser if the button above does not work</p>
        <p>
            <a href="{{ $url_data }}">{{ $url_data }}</a>
        </p>
    </div>
    <div class="footer">
        Your security is our priority.
        <p>&copy; {{ date('Y') . ' ' . env('APP_NAME') }}</p>
    </div>
@endsection