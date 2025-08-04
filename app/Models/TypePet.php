<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypePet extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'types_pet'; 
    protected $fillable = [
        'type_pet',
        'icono'
    ];

    public function breed(){
        return $this->hasMany(Breed::class, 'type_pet_id');
    }

    protected static function booted()
    {
        static::deleting(function ($typePet) {
            $typePet->breed()->each(function ($breed) {
                $breed->delete();
            });
        });
    }
}
