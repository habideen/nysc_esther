<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileImageController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        return view('student/reg/reg_4_profile_picture')->with([
            'saved' => null
        ]);
    } // index
}
