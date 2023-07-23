<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NINValidationController extends Controller
{
    public function index(Request $request)
    {
        $user = User::select(
            'national_identity_number',
            'birthdate',
            'last_name',
            'first_name',
            'middle_name'
        )
            ->where('id', Auth::user()->id)
            ->first();

        return view('student/reg/reg_1_nin')->with([
            'user' => $user
        ]);
    } // index



    public function getNIN(Request $request)
    {
        $min = strtotime("47 years ago");
        $max = strtotime("18 years ago");

        $rand_time = mt_rand($min, $max);

        $birth_date = date('Y-m-d', $rand_time);

        return response()->json([
            'birthdate' => $birth_date
        ]);
    } // getNIN



    public function update(Request $request)
    {
        $request->validate([
            'national_identity_number' => ['required', 'integer', 'regex:/^([0-9]){11,11}$/'],
            'birthdate' => ['required', 'date', 'date_format:Y-m-d', 'before:' . date('Y-m-d', strtotime('-12 years'))],
            'last_name' => ['required', 'string', 'min:2', 'max:30', 'regex:/^([A-Za-z])+$/'],
            'first_name' => ['required', 'string', 'min:2', 'max:30', 'regex:/^([A-Za-z])+$/'],
            'middle_name' => ['nullable', 'string', 'min:2', 'max:30', 'regex:/^([A-Za-z])+$/']
        ]);

        $save = User::find(Auth::user()->id);
        $save->national_identity_number = $request->national_identity_number;
        $save->birthdate = $request->birthdate;
        $save->last_name = $request->last_name;
        $save->first_name = $request->first_name;
        $save->middle_name = $request->middle_name;
        $save->save();


        if (!$save) {
            return redirect()->back()->with([
                'fail' => SERVER_ERROR
            ]);
        }

        Auth::setUser($save);

        return redirect('/student/reg/step/2')->with([
            'success' => 'NIN validation was successful'
        ]);
    } // update
}
