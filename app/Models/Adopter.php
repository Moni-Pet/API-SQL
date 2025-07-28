<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopter extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'phone', 
        'street', 
        'neighborhood', 
        'city_id',
        'state_id',
        'postal_code',
        'reference'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

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
