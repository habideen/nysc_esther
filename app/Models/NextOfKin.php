<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextOfKin extends Model
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
        'name_1',
        'relationship_1',
        'address_1',
        'phone_1',
        'state_id_1',
        'lga_id_1',
        'name_2',
        'relationship_2',
        'address_2',
        'phone_2',
        'state_id_2',
        'lga_id_2',
    ];
}
