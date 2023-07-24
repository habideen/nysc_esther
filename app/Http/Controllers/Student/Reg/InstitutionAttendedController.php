<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use App\Models\InstitutionAttended;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstitutionAttendedController extends Controller
{
    public function index(Request $request)
    {
        return view('student/reg/reg_7_institution_attended')->with([
            'institution' => InstitutionAttended::where('user_id', Auth::user()->id)->first()
        ]);
    } // index



    public function update(Request $request)
    {
        $request->validate([
            'primary_institution_1' => ['required'],
            'primary_from_year_1' => ['required', 'integer', 'min:1970', 'max:' . date('Y')],
            'primary_to_year_1' => ['required', 'integer', 'min:1970', 'max:' . date('Y')],
            'primary_award_1' => ['required'],
            'primary_institution_2' => ['nullable'],
            'primary_from_year_2' => ['nullable', 'integer', 'min:1970', 'max:' . date('Y')],
            'primary_to_year_2' => ['nullable', 'integer', 'min:1970', 'max:' . date('Y')],
            'primary_award_2' => ['nullable'],
            'secondary_institution_1' => ['required'],
            'secondary_from_year_1' => ['required', 'integer', 'min:1970', 'max:' . date('Y')],
            'secondary_to_year_1' => ['required', 'integer', 'min:1970', 'max:' . date('Y')],
            'secondary_award_1' => ['required'],
            'secondary_institution_2' => ['nullable'],
            'secondary_from_year_2' => ['nullable', 'integer', 'min:1970', 'max:' . date('Y')],
            'secondary_to_year_2' => ['nullable', 'integer', 'min:1970', 'max:' . date('Y')],
            'secondary_award_2' => ['nullable'],
        ]);

        $data = $request->except('_token');

        $save = InstitutionAttended::updateOrCreate(
            ['user_id' => Auth::user()->id],
            $data
        );

        if (!$save) {
            return redirect()->back()->with([
                'fail' => SERVER_ERROR
            ]);
        }

        return redirect('/student/reg/step/8')->with([
            'success' => 'Other information was update successfully'
        ]);
    } //update
}
