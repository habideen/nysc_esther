<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LGAClearanceController extends Controller
{
    public function index()
    {
        return view('student.lga_clearance')->with([]);
    } // index
}
