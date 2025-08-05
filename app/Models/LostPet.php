<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LostPet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'pet_id', 
        'lat', 
        'lon', 
        'description', 
        'user_find_id',
        'lost_date',
        'status'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
    public function userFind()
    {
        return $this->hasOne(User::class, 'user_id');
    }
    public function pet()
    {
        return $this->hasOne(Pet::class, 'pet_id');
    }

}
