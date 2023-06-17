<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstitutionValidationController extends Controller
{
    public function index(Request $request)
    {
        return view('student/reg/reg_2_validate_institution')->with([
            'saved' => null
        ]);
    } // index
}
