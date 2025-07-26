<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'state'
    ];

    public function cities()
    {
        return $this->hasMany(City::class, 'state_id');
    }public function adopters()
    {
        return $this->hasMany(Adopter::class, 'state_id');
    }
}
