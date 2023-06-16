@extends('layouts.email')

@section('title') Reset password @endsection

@section('content')
<div class="head">
    <img src="{{ env('APP_URL') }}/assets/img/logo2.png" alt="{{ env('APP_NAME') }} logo">
</div>
<div class="content">
    <p>Hello,</p>
    <p>Your login password was reset successfully at {{ date('g:i a') }}.</p>

    <p>Change it or contact us if it wasn't you.</p>
    <p class="reset-p">
        <a href="{{ $url_data }}" class="reset-pwd">Login</a>
    </p>
</div>
<div class="footer">
    Your security is our priority.
    <p>&copy; {{ date('Y') . ' ' . env('APP_NAME') }}</p>
</div>
@endsection