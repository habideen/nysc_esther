<?php

namespace App\Http\Controllers;

use App\Models\EmailVerification;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Verification extends Controller
{
    /**
     * All verifications go down here
     * Verify Email
     * Verify Phone
     */


    public function sendEmailVerification(Request $request)
    {
        $success_msg = 'We will send a verification email to your e-mail within 10 minutes if this email is '
            . 'found in our system. Remember to check your spam box too.';

        $account = User::select('email', 'email_verified_at')
            ->where('email', $request->email)->first();

        if (!$account) {
            return redirect()->back()->with([
                'success' => $success_msg
            ]);
        }

        if ($account->email_verified_at) {
            return redirect('/login')->with([
                'success', 'You have already verified.'
            ]);
        }


        $send = emailVerifyLink($request->email);

        if (!$send) {
            return redirect()->back()->with([
                'fail' => 'A system error occured. Please try again'
            ]);
        }

        return redirect()->back()->with([
            'success' => $success_msg
        ]);
    } //sendEmailVerification




    public function verifyEmail(Request $request, $verification_id = null, $email_code = null)
    {
        //verify from email
        $verification = EmailVerification::where('id', $verification_id)->first();
        if (!$verification) {
            return redirect('/verify_email')->with([
                'fail' => 'Invalid verification link'
            ]);
        }


        if (!Hash::check($email_code, $verification->code)) {
            return redirect('/verify_email')->with([
                'fail' => 'Invalid verification link'
            ]);
        }

        EmailVerification::where('user_email', $verification->user_email)->delete();
        User::where('email', $verification->user_email)->update(['email_verified_at' => date('Y-m-d H:i:s')]);
        return redirect('/login')->with([
            'success' => 'Email verification was successful'
        ]);
    } //verifyEmail
}
