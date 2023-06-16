@extends('layouts.email')

@section('title') Welcome to the National Youth Service Corps - Confirm Your Email Address @endsection

@section('content')

<div class="head">
    <img src="{{ env('APP_URL') }}/assets/img/banner1.png" alt="{{ env('APP_NAME') }} logo">
</div>
<div class="content">
    <p>Hi,</p>

    <h2>Welcome to the National Youth Service Corps (NYSC)!</h2>

    <p>
        Welcome to the National Youth Service Corps (NYSC)! We are thrilled to have you on board. To activate your
        account, kindly click the link below to confirm your email: {{ date('dmYHis') }}
    </p>

    <p><a href="{{ $verification_link }}">Confirm Email</a></p>

    <p>By confirming your email, you will unlock access to a world of opportunities and resources that NYSC offers. We
        can't wait to embark on this exciting journey with you!</p>
    <br>
    <p>Best regards,<br>
        NYSC</p>
</div>

<div class="footer">
    &copy; {{ date('Y') . ' ' . env('APP_NAME') }}
</div>

@endsection