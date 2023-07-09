<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function uploadStudentView()
    {
        return view('admin.upload_students')->with([
            'student' => null
        ]);
    } // uploadStudentView
}
