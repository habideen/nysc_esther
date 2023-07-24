<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use App\Models\LocalGovernments;
use App\Models\OtherInformation;
use App\Models\States;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class OtherInfoController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        $states = States::all();
        $local_governments = LocalGovernments::all();


        return view('student/reg/reg_5_other_information')->with([
            'states' => $states,
            'local_governments' => $local_governments,
            'otherInfo' => OtherInformation::where('user_id', Auth::user()->id)->first()
        ]);
    } // index



    public function update(Request $request)
    {
        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        Session::flash('fail', 'Invalid inputs');
        $request->validate([
            'present_state_id' => ['required', 'integer', 'exists:states,id'],
            'present_lga_id' => [
                'required', 'integer',
                Rule::exists('local_governments', 'id')->where(function ($query) use ($request) {
                    return $query->where('state_id', (int)$request->present_state_id)
                        ->where('id', (int)$request->present_lga_id);
                })
            ],
            'present_address' => ['required', 'string', 'min:2', 'max:100'],
            'permanent_state_id' => ['required', 'integer', 'exists:states,id'],
            'permanent_lga_id' => [
                'required', 'integer',
                Rule::exists('local_governments', 'id')->where(function ($query) use ($request) {
                    return $query->where('state_id', (int)$request->permanent_state_id)
                        ->where('id', (int)$request->permanent_lga_id);
                })
            ],
            'permanent_address' => ['required', 'string', 'min:2', 'max:100'],
            'origin_state_id' => ['required', 'integer', 'exists:states,id'],
            'origin_lga_id' => [
                'required', 'integer',
                Rule::exists('local_governments', 'id')->where(function ($query) use ($request) {
                    return $query->where('state_id', (int)$request->origin_state_id)
                        ->where('id', (int)$request->origin_lga_id);
                })
            ],
            'have_previous_callup_letter' => [
                'nullable', 'min:2', 'max:50',
                Rule::requiredIf($request->is_previous_callup == 'Yes')
            ],
            'health_status' => ['required', Rule::in(['Excellent', 'Good', 'Fair', 'Poor'])],
            'physical_challenges' => ['nullable', 'min:2', 'max:100'],
            'cloth_kit' => ['required', Rule::in(['S', 'M', 'L', 'XL', 'XXL'])],
            'shoe_kit' => ['required', 'integer', 'min:37', 'max:45']
        ]);
        Session::remove('fail');


        if (!$request->have_previous_callup_letter) {
            $request->request->add(['have_previous_callup_letter' => null]);
        }
        $data = $request->except('_token');


        $save = OtherInformation::updateOrCreate(
            ['user_id' => Auth::user()->id],
            $data
        );

        if (!$save) {
            return redirect()->back()->with([
                'fail' => SERVER_ERROR
            ]);
        }

        Auth::setUser(User::find(Auth::user()->id));

        return redirect('/student/reg/step/6')->with([
            'success' => 'Other information was update successfully'
        ]);
    } // update
}
