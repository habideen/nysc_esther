<?php

namespace App\Http\Controllers;

use App\Models\EmailVerification;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class Verification extends Controller
{
    /**
     * All verifications go down here
     * Verify Email
     * Verify Phone
     */


    public function sendEmailVerification(Request $request)
    {
        $account = User::select('email', 'fullname')
            ->where('email', $request->email)->first();

        if (!$account) {
            $msg = 'We will send you a link if email is found';

            if (strtolower($request->segment(1)) == 'api') { //from api call
                return redirect()->back()->with([
                    'fail' => $msg
                ]);
            } else {
                return redirect()->back()->with([
                    'success' => $msg
                ]);
            }
        }


        $token = Str::random(30);

        //save verification to db
        $save = new EmailVerification;
        $save->user_email = $request->email;
        $save->code = Hash::make($token);
        $save->save();

        $verification_link = url('/verify_email/' . $save->id . '/' . $token);

        //send email to user
        try {
            Mail::send(
                'email.registration',
                [
                    'verification_link' => $verification_link
                ],
                function ($message) use ($request) {

                    $message->to($request->email);

                    $message->subject('Welcome to ' . env('APP_NAME'));
                }
            );
        } catch (Exception $ex) {
            $send = false;
        }

        // // runMyScheduler();


        $msg = 'Verification link sent';

        if (strtolower($request->segment(1)) == 'api') { //from api call
            return response([
                'status' => 'success',
                'message' => $msg
            ], 201);
        } else {
            return redirect()->back()->with([
                'success' => $msg
            ]);
        }
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
