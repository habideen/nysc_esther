<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstitutionAttendedController extends Controller
{
    public function index(Request $request)
    {
        return view('student/reg/reg_7_institution_attended')->with([
            'saved' => null
        ]);
    } // index
}
