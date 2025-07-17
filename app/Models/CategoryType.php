<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    use HasFactory;

    protected $table = 'types_category';

    protected $fillable = [
        'type_category'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'type_category_id');
    }
}
