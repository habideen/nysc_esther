<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherInformation extends Model
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
        'present_state_id',
        'present_lga_id',
        'present_address',
        'permanent_state_id',
        'permanent_lga_id',
        'permanent_address',
        'origin_state_id',
        'origin_lga_id',
        'have_previous_callup_letter',
        'health_status',
        'physical_challenges',
        'cloth_kit',
        'shoe_kit',
    ];
}
