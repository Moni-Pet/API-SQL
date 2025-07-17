<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;

    public $fillable =[
        'type_pet_id',
        'breed'
    ];

    public function TypePet(){
        return $this->belongsTo(TypePet::class, 'type_pet_id');
    }
    public function Pets(){
        return $this->hasMany(Pet::class, 'breed_id');
    }
}
