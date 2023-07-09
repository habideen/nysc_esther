<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        //limit failed attempt /min to 5
        $executed = RateLimiter::attempt('auth:' . $request->ip(), $perMinute = 30, function () {
        });


        if (!$executed)
            return redirect()->back()->with('fail', 'Too many attempts. Try again after 1 minute.');

        $remember_me = $request->has('remember_me') ? true : false;

        if (!Auth::attempt($credentials, $remember_me))
            return redirect()->back()->with('fail', 'Login credentials is incorrect.');



        //check if email is verified
        if (!Auth::user()->email_verified_at) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            $request->session()->flush();
            return redirect()->back()->with('fail', 'Please verify your email. '
                . ' <a href="/verify_email">Verify now</>');
        }

        $request->session()->regenerate();

        RateLimiter::clear('auth:' . $request->ip());


        if (Auth::user()->account_type == 'Student' && !Auth::user()->reg_completed) {
            return redirect()->intended('/' . account_type(Auth::user()->account_type) . '/reg/step/1');
        } elseif (Auth::user()->account_type == 'Admin' || Auth::user()->account_type == 'Student') {
            return redirect()->intended('/' . account_type(Auth::user()->account_type) . '/dashboard');
        }
    } // login
}
