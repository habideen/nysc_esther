<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\StudentsImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class StudentsController extends Controller
{
    public function uploadStudentView()
    {
        // phpinfo();
        return view('admin.upload_students')->with([
            'student' => null
        ]);
    } // uploadStudentView



    public function uploadStudent(Request $request)
    {
        Excel::import(new StudentsImport, $request->file);

        return redirect()->back()->with([
            'success' => 'Students uploaded successfully'
        ]);
    } // uploadStudent
}
