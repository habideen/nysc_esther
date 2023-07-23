<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use App\Models\CanditeInfoFromSchool;
use App\Models\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstitutionValidationController extends Controller
{
    private function getUserInfoFromInstitution()
    {
        return $userInfo = CanditeInfoFromSchool::select(
            'candite_info_from_schools.id',
            'candite_info_from_schools.jamb_reg_no',
            'candite_info_from_schools.matric_no',
            'candite_info_from_schools.course_of_study',
            'candite_info_from_schools.graduation_date',
            'candite_info_from_schools.qualification',
            'candite_info_from_schools.last_name',
            'candite_info_from_schools.first_name',
            'candite_info_from_schools.middle_name',
            'candite_info_from_schools.user_id',
            'candite_info_from_schools.institution_id',
            'institutions.institution'
        )
            ->join('institutions', 'institutions.id', '=', 'candite_info_from_schools.institution_id');
    } // getUserInfoFromInstitution



    public function index(Request $request)
    {
        if (!isNINValidation()) {
            return redirect('/student/reg/step/1')->with([
                'fail' => 'Complete your NIN validation'
            ]);
        }

        if ($request->has('validate_btn') || $request->has('save_changes')) {
            $request->validate([
                'institution_id' => ['required', 'integer', 'exists:institutions,id'],
                'matric_no' => ['required', 'string', 'min:3'],
                'jamb_reg_no' => ['required', 'string', 'regex:/^[0-9]{8,8}[A-Za-z]{2,2}$/'],
            ]);
        }


        if ($request->has('validate_btn')) {
            $userInfo = $this->getUserInfoFromInstitution()
                ->where('institution_id', $request->institution_id)
                ->where('matric_no', strtoupper($request->matric_no))
                ->where('jamb_reg_no', strtoupper($request->jamb_reg_no))
                ->first();
        } // has request
        elseif ($request->has('save_changes')) {
            $saved = $this->update($request);

            if (!$saved['status']) {
                return redirect('/student/reg/step/2')->with([
                    'fail' => $saved['message']
                ]);
            }

            return redirect('/student/reg/step/3')->with([
                'success' => $saved['message']
            ]);
        } // save changes
        else {
            $userInfo = $this->getUserInfoFromInstitution()
                ->where('user_id', Auth::user()->id)
                ->first();
        }


        $institutions = Institution::select(
            'id',
            'institution'
        )
            ->orderBy('institution', 'ASC')
            ->get();


        return view('student/reg/reg_2_validate_institution')->with([
            'institutions' => $institutions,
            'userInfo' => $userInfo ?? null
        ]);
    } // index





    private function update(Request $request)
    {
        $userInfo = $this->getUserInfoFromInstitution()
            ->where('institution_id', $request->institution_id)
            ->where('matric_no', strtoupper($request->matric_no))
            ->where('jamb_reg_no', strtoupper($request->jamb_reg_no))
            ->first();

        $save = false;
        if ($userInfo) {
            $save = CanditeInfoFromSchool::where('institution_id', $request->institution_id)
                ->where('matric_no', strtoupper($request->matric_no))
                ->where('jamb_reg_no', strtoupper($request->jamb_reg_no))
                ->update(['user_id' => Auth::user()->id]);

            $message = $save ? 'User record saved successfully' : SERVER_ERROR;
        } else {
            $message = 'We could not find your information.';
        }


        return [
            'status' => $save,
            'message' => $message
        ];
    } // update
}
