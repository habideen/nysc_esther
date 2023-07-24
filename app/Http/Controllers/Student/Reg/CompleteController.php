<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompleteController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        return view('student.reg.reg_9_complete_reg')->with([]);
    } // index



    public function update(Request $request)
    {
        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        $request->validate([
            'completeRegistration' => ['accepted']
        ]);


        User::where('id', Auth::user()->id)
            ->update([
                'reg_completed' => '1',
                'batch' => currentBatch()
            ]);

        Auth::setUser(User::find(Auth::user()->id));


        return redirect('/student/dashboard')->with([
            'success' => 'Your registration was marked as completed.'
        ]);
    } //update
}
