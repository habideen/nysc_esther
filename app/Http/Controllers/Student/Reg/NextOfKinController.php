<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NextOfKinController extends Controller
{
    public function index(Request $request)
    {
        return view('student/reg/reg_6_next_of_kin')->with([
            'saved' => null
        ]);
    } // index
}
