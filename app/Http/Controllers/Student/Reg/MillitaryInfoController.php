<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use App\Models\MillitaryInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class MillitaryInfoController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        return view('student/reg/reg_8_military_info')->with([
            'millitary' => MillitaryInfo::where('user_id', Auth::user()->id)->first()
        ]);
    } // index




    public function update(Request $request)
    {
        if (Auth::user()->reg_completed) {
            return redirect()->back();
        }

        $request->validate([
            'naf_na_navy' => ['required', Rule::in(['Yes', 'No'])],
            'nia' => ['required', Rule::in(['Yes', 'No'])],
            'npf' => ['required', Rule::in(['Yes', 'No'])],
            'national_awardee' => ['nullable', 'string', 'min:2'],
            'national_language' => ['nullable', 'string', 'min:2'],
            'states_visited' => ['nullable', 'string', 'min:2']
        ]);

        $data = $request->except('_token');

        $save = MillitaryInfo::updateOrCreate(
            ['user_id' => Auth::user()->id],
            $data
        );

        if (!$save) {
            return redirect()->back()->with([
                'fail' => SERVER_ERROR
            ]);
        }

        return redirect('/student/reg/step/9')->with([
            'success' => 'Millitary information update successfully'
        ]);
    } //update
}
