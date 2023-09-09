<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'address',

    ];

    public function items()
    {

        return $this->hasMany(Item::class);
        
    }
}
