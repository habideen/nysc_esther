<?php

namespace App\Http\Controllers\Institution;

use App\Http\Controllers\Controller;
use App\Imports\StudentsImport;
use App\Models\CanditeInfoFromSchool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class StudentsController extends Controller
{
    public function uploadStudentView()
    {
        // phpinfo();
        return view('institution.upload_students')->with([
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



    public function viewStudent(Request $request)
    {
        if ($request->year) {
            $students = CanditeInfoFromSchool::where('graduation_year', $request->year . '-12-12')
                ->get();
        } else {
            $students = CanditeInfoFromSchool::get();
        }


        return view('institution.view_students')->with([
            'students' => $students
        ]);
    } // viewStudent
}
