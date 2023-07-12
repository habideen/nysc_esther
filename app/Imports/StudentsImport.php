<?php

namespace App\Imports;

use App\Models\CanditeInfoFromSchool;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport extends \PhpOffice\PhpSpreadsheet\Cell\StringValueBinder implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return CanditeInfoFromSchool::updateOrCreate(
            [
                'institution_id' => strtoupper($row['institution_id']),
                'jamb_reg_no' => strtoupper($row['utme_no']),
                'matric_no' => strtoupper($row['matric_no'])
            ],
            [
                'course_of_study' => trim($row['course_of_study']),
                'graduation_date' => date('Y-m-d', strtotime($row['graduation_date'])),
                'qualification' => trim($row['qualification']),
                'first_name' => trim($row['first_name']),
                'middle_name' => trim($row['middle_name']),
                'last_name' => trim($row['last_name']),
                'uploaded_by' => Auth::user()->id,
            ]
        );
    }
}
