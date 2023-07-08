<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PPALetterController extends Controller
{
    public function index()
    {
        return view('student.ppa_letter')->with([]);
    } // index
}
