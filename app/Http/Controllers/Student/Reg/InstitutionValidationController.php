<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionValidationController extends Controller
{
    public function index(Request $request)
    {
        if (!isNINValidation()) {
            return redirect('/student/reg/step/1')->with([
                'fail' => 'Complete your NIN validation'
            ]);
        }


        $institutions = Institution::select(
            'id',
            'institution'
        )
            ->orderBy('institution', 'ASC')
            ->get();

        return view('student/reg/reg_2_validate_institution')->with([
            'institutions' => $institutions
        ]);
    } // index



    public function update(Request $request)
    {
        $request->validate([
            'institution_id' => ['required', 'integer', 'exists:institutions,id'],
            'matric_no' => ['required', 'string', 'min:3'],
            'jamb_reg_no' => ['required', 'string', 'regex:/^[0-9]{8,8}[A-Za-z]{2,2}$/'],
        ]);
    } // update
}
