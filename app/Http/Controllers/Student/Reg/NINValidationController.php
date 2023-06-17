<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NINValidationController extends Controller
{
    public function index(Request $request)
    {
        return view('student/reg/reg_1_nin')->with([
            'saved' => null
        ]);
    } // index
}
