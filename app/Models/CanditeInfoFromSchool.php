<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CanditeInfoFromSchool extends Model
{
    use HasFactory;


    protected $fillable = [
        'institution_id',
        'jamb_reg_no',
        'matric_no',
        'course_of_study',
        'graduation_date',
        'qualification',
        'first_name',
        'middle_name',
        'last_name',
        'uploaded_by',
    ];
}
