<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description', 
        'price', 
        'stock', 
        'discount'
    ];

    public function productPhotos()
    {
        return $this->hasMany(ProductPhoto::class, 'product_id');
    }

    public function detailsOrders()
    {
        return $this->hasMany(OrderDetail::class, 'product_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products', 'product_id', 'category_id');
    }
    protected static function booted()
    {   
        static::deleting(function ($product) {
            if ($product->productPhotos()->exists()) {
                $product->productPhotos->each->delete();
            }
            if ($product->detailsOrders()->exists()) {
                $product->detailsOrders->each->delete();
            }
        });
    }

}