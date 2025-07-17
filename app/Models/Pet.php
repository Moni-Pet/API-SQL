<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
     use HasFactory;

    protected $fillable = [
        'breed_id', 
        'name', 
        'birthday', 
        'gender', 
        'spayed', 
        'size', 
        'weight', 
        'height', 
        'decription', 
        'status', 
        'user_id'
    ];

    public function Breed(){
        return $this->belongsTo(Breed::class, 'breed_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function adoption()
    {
        return $this->hasOne(Adoption::class, 'pet_id');
    }

    public function appointments()
    {
        return $this->hasMany(AppointmentPet::class, 'pet_id');
    }
    public function PetPhothos() {
        return $this->hasMany(PetPhoto::class, 'pet_id');
        
    }
}
