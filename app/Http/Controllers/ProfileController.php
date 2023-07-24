<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function updateAvatar(Request $request)
    {
        //return $request->image_result;
        $request->validate([
            'image_result' => ['required', 'string']
        ]);

        $imgPath = '/assets/img/users/';

        list($type, $image) = explode(';', $request->image_result);
        list(, $image) = explode(',', $image);
        $image = base64_decode($image);

        $avatarName = Auth::user()->id . '.png';
        $avatarPath = public_path($imgPath);


        $user = User::find(Auth::user()->id);

        if ($user->avatar && file_exists(public_path($user->avatar))) {
            unlink(public_path($user->avatar));
        }
        $avatarPath = public_path($imgPath);
        file_put_contents($avatarPath . $avatarName,   $image);

        $user->image = $imgPath . $avatarName;
        $user->save();

        if (!$user) {
            return redirect()->back()->withInput()
                ->with('fail', 'Something went wrong');
        }

        if (Auth::user()->account_type == 'Student') {
            $url = '/student/reg/step/5';
        }

        return redirect($url)->with([
            'success' => 'Profile image updated successfully'
        ]);
    } //updateAvatar
}
