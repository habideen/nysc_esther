<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileImageController extends Controller
{
    public function index(Request $request)
    {
        return view('student/reg/reg_4_profile_picture')->with([
            'saved' => null
        ]);
    } // index
}
