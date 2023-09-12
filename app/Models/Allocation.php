<?php

namespace App\Models;

use App\Models\Store;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\StoreItems;

class Allocation extends Model
{
    use HasFactory;

    protected $fillable = ['store_id', 'product_id', 'quantity','acceptance'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Define the relationship with the StoreItem model
    public function storeItems()
    {
        return $this->hasOne(StoreItems::class);
    }
}
