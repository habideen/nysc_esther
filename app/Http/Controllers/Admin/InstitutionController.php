<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\InstitutionsImport;
use App\Models\Institution;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InstitutionController extends Controller
{
    public function institutionView()
    {
        return view('admin.view_institution')->with([
            'institutions' => Institution::get()
        ]);
    } // institutionView



    public function uploadInstitution(Request $request)
    {
        Excel::import(new InstitutionsImport, $request->file);

        return redirect()->back()->with([
            'success' => 'Institutions uploaded successfully'
        ]);
    } // uploadInstitution
}
