<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index(Request $request)
    {
        return view('student/reg/reg_3_user_information')->with([
            'saved' => null
        ]);
    } // index
}
