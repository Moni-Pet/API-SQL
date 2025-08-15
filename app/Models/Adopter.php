<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adopter extends Model
{
    use HasFactory, SoftDeletes;
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
        return $this->hasOne(User::class, 'id');
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

    protected static function booted()
    {
        static::deleting(function ($adopter) {
            $adopter->adoptions()->each(function ($adoption) {
                $adoption->delete();
            });
        });
    }
}
