<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use App\Models\LocalGovernments;
use App\Models\NextOfKin;
use App\Models\States;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class NextOfKinController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        $states = States::all();
        $local_governments = LocalGovernments::all();



        return view('student/reg/reg_6_next_of_kin')->with([
            'states' => $states,
            'local_governments' => $local_governments,
            'nextOfKin' => NextOfKin::where('user_id', Auth::user()->id)->first()
        ]);
    } // index



    public function update(Request $request)
    {
        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        $request->validate([
            'name_1' => ['required', 'min:2', 'max:90', 'regex:/^([A-Za-z \-])+$/'],
            'relationship_1' => ['required'],
            'address_1' => ['required', 'min:2', 'max:100', 'regex:/^([A-Za-z0-9 \-_\)\(])+$/'],
            'phone_1' => ['required',  'min:11', 'max:11', 'regex:/^[0][7-9][0-9]{9,9}$/'],
            'state_id_1' => ['required', 'integer', 'exists:states,id'],
            'lga_id_1' => [
                'required', 'integer',
                Rule::exists('local_governments', 'id')->where(function ($query) use ($request) {
                    return $query->where('state_id', (int)$request->state_id_1)
                        ->where('id', (int)$request->lga_id_1);
                })
            ],

            'name_2' => ['required', 'min:2', 'max:90', 'regex:/^([A-Za-z \-])+$/'],
            'relationship_2' => ['required'],
            'address_2' => ['required', 'min:2', 'max:100', 'regex:/^([A-Za-z0-9 \-_\)\(])+$/'],
            'phone_2' => ['required',  'min:11', 'max:11', 'regex:/^[0][7-9][0-9]{9,9}$/'],
            'state_id_2' => ['required', 'integer', 'exists:states,id'],
            'lga_id_2' => [
                'required', 'integer',
                Rule::exists('local_governments', 'id')->where(function ($query) use ($request) {
                    return $query->where('state_id', (int)$request->state_id_2)
                        ->where('id', (int)$request->lga_id_2);
                })
            ],
        ]);


        $data = $request->except('_token');

        $save = NextOfKin::updateOrCreate(
            ['user_id' => Auth::user()->id],
            $data
        );

        if (!$save) {
            return redirect()->back()->with([
                'fail' => SERVER_ERROR
            ]);
        }

        return redirect('/student/reg/step/7')->with([
            'success' => 'Other information was update successfully'
        ]);
    } //update
}
