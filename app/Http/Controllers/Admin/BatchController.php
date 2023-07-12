<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BatchController extends Controller
{
    public function batchView()
    {
        return view('admin.update_batch')->with([]);
    } // batchView




    public function batchUpdate(Request $request)
    {
        $request->validate([
            'year' => ['required', 'integer', 'digits:4', 'min:1900', 'max:' . (date('Y') + 3)],
            'batch' => ['required', Rule::in(['A', 'B', 'C'])],
            'stream' => ['required', Rule::in(['1', '2'])]
        ]);

        $save = new Batch;
        $save->batch = $request->year . ' ' . $request->batch . ', ' . $request->stream;
        $save->save();

        if (!$save) {
            return redirect()->back()->with([
                'fail' => SERVER_ERROR
            ]);
        };

        return redirect()->back()->with([
            'success' => 'Batch updated successfully'
        ]);
    } // batchUpdate
}
