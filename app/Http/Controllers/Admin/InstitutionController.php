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
        // $file = base_path('uni.json');

        // $data = [];

        // $file = file_get_contents($file);
        // $file = json_decode($file);
        // $file = $file->data;
        // foreach ($file as $states) {
        //     foreach ($states as $state => $uni) {
        //         foreach ($uni as $key => $value) {
        //             if (!trim($value)) {
        //                 continue;
        //             }
        //             array_push($data, [
        //                 'state' => $state,
        //                 'institution' => trim($value),
        //                 'created_at' => now(),
        //                 'updated_at' => now()
        //             ]);
        //         }
        //     }
        // }

        // Institution::insert($data);


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
