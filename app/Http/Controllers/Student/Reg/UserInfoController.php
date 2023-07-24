<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserInfoController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        return view('student/reg/reg_3_user_information')->with([
            'saved' => null
        ]);
    } // index




    public function update(Request $request)
    {
        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        $request->validate([
            'title' => ['required', Rule::in(['Mr', 'Miss', 'Mr'])],
            'last_name' => ['required', 'string', 'min:2', 'max:30', 'regex:/^([A-Za-z])+$/'],
            'first_name' => ['required', 'string', 'min:2', 'max:30', 'regex:/^([A-Za-z])+$/'],
            'middle_name' => ['nullable', 'string', 'min:2', 'max:30', 'regex:/^([A-Za-z])+$/'],
            'gender' => ['required', Rule::in(['M', 'F'])],
            'marital_status' => ['required', Rule::in(['Single', 'Married', 'Divorced', 'Widowed'])],
            'qualification' => ['required', Rule::in(['HND', 'Degree'])],
            'phone_1' => ['required', 'string', 'min:11', 'max:11', 'regex:/^[0][7-9][0-9]{9,9}$$/'],
        ]);


        $save = User::where('id', Auth::user()->id)
            ->update($request->except('_token'));


        if (!$save) {
            return redirect()->back()->with([
                'fail' => SERVER_ERROR
            ]);
        }


        Auth::setUser(User::find(Auth::user()->id));

        return redirect('/student/reg/step/4')->with([
            'success' => 'Record saved successfully'
        ]);
    } // update
}
