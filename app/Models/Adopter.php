<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopter extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'phone', 
        'email', 
        'address', 
        'city_id',
        'state_id'
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function adoptions()
    {
        return $this->hasMany(Adoption::class, 'adopter_id');
    }
}
