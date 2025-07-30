<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categories';

    protected $fillable = [
        'category', 
        'type_category_id'
    ];

    public function typeCategory()
    {
        return $this->belongsTo(CategoryType::class, 'type_category_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'categories_products', 'category_id', 'product_id');
    }
}
