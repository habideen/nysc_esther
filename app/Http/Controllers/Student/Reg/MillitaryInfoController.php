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
        return view('student/reg/reg_8_military_info')->with([
            'millitary' => MillitaryInfo::where('user_id', Auth::user()->id)->first()
        ]);
    } // index




    public function update(Request $request)
    {
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

        User::where('id', Auth::user()->id)
            ->update(['reg_completed' => '1']);

        Auth::setUser(User::find(Auth::user()->id));

        return redirect('/student/dashboard')->with([
            'success' => 'Millitary information update successfully'
        ]);
    } //update
}
