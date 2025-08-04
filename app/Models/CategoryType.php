<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryType extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'types_category';

    protected $fillable = [
        'type_category'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'type_category_id');
    }

    protected static function booted()
    {
        static::deleting(function ($typeCategory) {
            $typeCategory->categories->each->delete();
        });
    }
}
