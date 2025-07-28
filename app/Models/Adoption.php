<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    protected $table = 'adoption';

     protected $fillable = [
        'adopter_id', 
        'pet_id', 
        'date', 
        'adoption_status', 
        'notes', 
        'delivery_date'
    ];

    public function adopter()
    {
        return $this->belongsTo(Adopter::class, 'adopter_id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

    public function followups()
    {
        return $this->hasMany(AdoptionFollowup::class, 'adoption_id');
    }

    public function returnPet()
    {
        return $this->hasOne(ReturnPet::class, 'adoption_id');
    }
}
