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
        return $this->belongsTo(User::class, 'user_id');
    }
    public function userFind()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

}
