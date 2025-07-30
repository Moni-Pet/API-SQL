<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'state'
    ];

    public function cities()
    {
        return $this->hasMany(City::class, 'state_id');
    }
    
    public function adopters()
    {
        return $this->hasMany(Adopter::class, 'state_id');
    }

    protected static function booted()
    {
        static::deleting(function ($state) {
            $state->cities->each->delete();
            $state->adopters->each->delete();
        });
    }
}
