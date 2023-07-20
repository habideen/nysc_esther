<?php

namespace App\Imports;

use App\Models\Institution;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InstitutionsImport extends \PhpOffice\PhpSpreadsheet\Cell\StringValueBinder implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $save = User::updateOrCreate(
            [
                'email' => strtolower($row['email'])
            ],
            [
                'password' => Hash::make(trim(strtolower($row['email']))),
                'account_type' => 'Institution'
            ]
        );

        if ($save) {
            return Institution::updateOrCreate(
                [
                    'email' => strtolower($row['email'])
                ],
                [
                    'state' => ucwords(trim($row['state'])),
                    'institution' => trim($row['name'])
                ]
            );
        } else {
            return false;
        }
    }
}
