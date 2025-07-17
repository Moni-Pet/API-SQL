<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePet extends Model
{
    use HasFactory;
    protected $table = 'types_pet'; 
    public $fillable = [
        'type_pet',
        'icono'
    ];

    public function Breeds(){
        return $this->hasMany(Breed::class, 'type_pet');
    }
}
