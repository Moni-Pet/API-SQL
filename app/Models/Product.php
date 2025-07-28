<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'price', 
        'stock', 
        'discount'
    
    ];

    public function gadgetUsers()
    {
        return $this->hasMany(GadgetUser::class, 'user_id');
    }

    public function productPhotos()
    {
        return $this->hasMany(ProductPhoto::class, 'product_id');
    }

    public function detailsOrders()
    {
        return $this->hasMany(OrderDetail::class, 'producto_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products', 'product_id', 'category_id');
    }
}
