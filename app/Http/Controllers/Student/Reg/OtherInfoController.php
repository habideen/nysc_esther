<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherInfoController extends Controller
{
    public function index(Request $request)
    {
        return view('student/reg/reg_5_other_information')->with([
            'saved' => null
        ]);
    } // index
}
