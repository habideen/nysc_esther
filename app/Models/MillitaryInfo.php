<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillitaryInfo extends Model
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
        'naf_na_navy',
        'nia',
        'npf',
        'national_awardee',
        'national_language',
        'states_visited',
    ];
}
