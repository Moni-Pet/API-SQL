<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Breed extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable =[
        'type_pet_id',
        'breed'
    ];

    public function typePet(){
        return $this->belongsTo(typePet::class, 'type_pet_id');
    }
    public function pets(){
        return $this->hasMany(Pet::class, 'breed_id');
    }

    protected static function booted()
    {
        static::deleting(function ($breed) {
            $breed->pets()->each(function ($pet) {
                $pet->delete();
            });
        });
    }
}
