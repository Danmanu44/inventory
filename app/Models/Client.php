<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'custom_id',
        'phone_number',
        'LGA',
        'no_of_dependent',
        'address',
        'ward',
        'poll_unit'

    ];
}
