<?php

namespace App\Http\Controllers\Student\Reg;

use App\Http\Controllers\Controller;
use App\Models\LocalGovernments;
use App\Models\States;
use Illuminate\Http\Request;

class OtherInfoController extends Controller
{
    public function index(Request $request)
    {
        $states = States::all();
        $local_governments = LocalGovernments::all();


        return view('student/reg/reg_5_other_information')->with([
            'states' => $states,
            'local_governments' => $local_governments,
            'otherInfo' => null
        ]);
    } // index
}
