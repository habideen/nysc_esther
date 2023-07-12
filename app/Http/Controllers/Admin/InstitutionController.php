<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use Illuminate\Http\Request;

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




    public function institutionUpdate()
    {


        return redirect()->back()->with([]);
    } // institutionUpdate
}
