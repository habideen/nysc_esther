<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EmailVerification;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6'],
            'security_question' => ['required'],
            'security_answer' => ['required', 'confirmed', 'min:2', 'max:50']
        ]);


        $save = new User;
        $save->email = strtolower($request->email);
        $save->password = Hash::make($request->password);
        $save->security_question = $request->security_question;
        $save->security_answer = Hash::make($request->security_answer);
        $save->account_type = 'Student';
        $save->save();


        $send = emailVerifyLink($request->email);


        if (!$send) {
            return redirect()->back()->with([
                'fail' => 'Registration was successful. But we could not send you a verification mail.'
            ]);
        }

        return redirect()->back()->with([
            'success' => 'Registration was successful. Please check your mail to continue.'
        ]);
    } // register
}
