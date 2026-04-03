<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory; 
     protected $fillable = [
        'id',
        'name',
        'category_id',
        'stock',
        'price',
        'description',
    ];

public function products()
    {
        return $this->hasMany(Product::class);
    }
public function category()
    {
        return $this->belongsTo(Category::class);
    }




}
