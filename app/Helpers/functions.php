<?php

use App\Models\EmailVerification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


/**
 * emailVerifyLink
 * String $email: email to receive verification link
 * return: boolean
 */
if (!function_exists('emailVerifyLink')) {
  function emailVerifyLink($email)
  {
    $token = Str::random(30);

    //save verification to db
    $save_veri = new EmailVerification();
    $save_veri->user_email = $email;
    $save_veri->code = Hash::make($token);
    $save_veri->save();

    $verification_link = url('/verify_email/' . $save_veri->id . '/' . $token);

    $send = true;

    try {
      Mail::send(
        'email.registration',
        [
          'verification_link' => $verification_link
        ],
        function ($message) use ($email) {

          $message->to($email);

          $message->subject('Welcome to ' . date('dmYHis') . env('APP_NAME'));
        }
      );
    } catch (Exception $ex) {
      $send = false;
    }


    return $send;
  }
} // emailVerifyLink