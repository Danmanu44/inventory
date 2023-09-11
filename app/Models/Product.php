<?php

namespace App\Models;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'unit',
        'description',
        'quantity',
        'category_id',
        'price',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); // 'category_id' is the foreign key column in the products table
    }

    // Product Model
    public function items()
    {
        return $this->hasMany(Item::class);
    }

        // Define the inverse relationship with the Allocation model
        public function allocations()
        {
            return $this->hasMany(Allocation::class);
        }
    

}
