<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MillitaryInfoController extends Controller
{
    public function index(Request $request)
    {
        return view('student/reg/reg_8_military_info')->with([
            'saved' => null
        ]);
    } // index
}
