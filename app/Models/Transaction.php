<?php

namespace App\Models;

use App\Models\User;
use App\Models\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_store',
        'destination_store',
        'user_id',
        'acceptance_status',
        'item_id',
        'product_id'
    ];

    public function sourceStore()
    {
        return $this->belongsTo(Store::class, 'from_store');
    }

    public function destinationStore()
    {
        return $this->belongsTo(Store::class, 'destination_store');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
