<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
     use HasFactory, SoftDeletes;

    protected $fillable = [
        'breed_id', 
        'name', 
        'birthday', 
        'gender', 
        'spayed', 
        'size', 
        'weight', 
        'height', 
        'description', 
        'status', 
        'user_id',
        'uid'
    ];

    public function breed(){
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
    public function petPhotos() {
        return $this->hasMany(PetPhoto::class, 'pet_id'); 
    }

    public function lostPets() {
        return $this->hasMany(LostPet::class, 'pet_id'); 
    }

    protected static function booted()
    {
        static::deleting(function ($pet) {
            $pet->adoption()?->delete();
            $pet->appointments()->each(fn($a) => $a->delete());
            $pet->petPhotos()->each(fn($p) => $p->delete());
        });
    }
}
