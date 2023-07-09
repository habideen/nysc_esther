<?php

namespace App\Http\Controllers;

use App\Models\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index()
    {
        return view('index');
    } // index


    public function register()
    {
        return view('register');
    } // register 


    public function login()
    {
        if (Auth::user()) {
            if (Auth::user()->account_type == 'Student' && !Auth::user()->reg_completed) {
                return redirect()->intended('/' . account_type(Auth::user()->account_type) . '/reg/step/1');
            } elseif (Auth::user()->account_type == 'Admin' || Auth::user()->account_type == 'Student') {
                return redirect()->intended('/' . account_type(Auth::user()->account_type) . '/dashboard');
            }
        }

        return view('login');
    } // login


    public function reg_successful()
    {
        return view('register_done');
    } // reg_successful


    public function changePassword(Request $request, $email_base64, $token)
    {
        $is_present = PasswordReset::whereDate('expired_at', '>=', now())
            ->where('email', base64_decode($email_base64))
            ->where('token', $token)->count();

        if ($is_present < 1)
            return redirect('/login')->with('fail', 'The reset password link has expired or does not exist! Please generate a new link.');

        return view('change_password')->with([
            'email_base64' => $email_base64,
            'token' => $token
        ]);
    } // changePassword


    public function forgot_password()
    {
        return view('forgot_password');
    } // forgot_password


    public function sendVerificationLink()
    {
        return view('email_veri_link');
    } // sendVerificationLink
}
