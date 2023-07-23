<?php

use App\Models\Batch;
use App\Models\EmailVerification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;



define('SERVER_ERROR', 'An error occured! Please try again');


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




if (!function_exists('account_type')) {
  function account_type($account_type)
  {
    $account_type = strtolower($account_type);
    $account_type = str_replace(' ', '', $account_type);

    return $account_type;
  }
} // account_type




if (!function_exists('currentBatch')) {
  function currentBatch()
  {
    $batch = Batch::select('batch')
      ->latest()->first();

    return $batch ? $batch->batch : null;
  }
} // currentBatch




if (!function_exists('isRegCompleted')) {
  function isRegCompleted()
  {
    return !Auth::user()->reg_completed ? false : true;
  }
} // isRegCompleted




if (!function_exists('isNINValidation')) {
  function isNINValidation()
  {
    $user = User::find(Auth::user()->id);

    if (
      !$user->national_identity_number
      || !$user->birthdate
      || !$user->last_name
      || !$user->first_name
    ) {
      return false;
    } else {
      return true;
    }
  }
} // isNINValidation




if (!function_exists('getYear')) {
  function getYear($date)
  {
    $date = date('Y-m-d', strtotime($date));

    return explode('-', $date)[0] ?? false;
  }
} //getYear