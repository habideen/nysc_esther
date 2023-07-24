<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionAttended extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    use HasFactory;

    protected $fillable = [
        'user_id',
        'primary_institution_1',
        'primary_from_year_1',
        'primary_to_year_1',
        'primary_award_1',
        'primary_institution_2',
        'primary_from_year_2',
        'primary_to_year_2',
        'primary_award_2',
        'secondary_institution_1',
        'secondary_from_year_1',
        'secondary_to_year_1',
        'secondary_award_1',
        'secondary_institution_2',
        'secondary_from_year_2',
        'secondary_to_year_2',
        'secondary_award_2',
    ];
}
