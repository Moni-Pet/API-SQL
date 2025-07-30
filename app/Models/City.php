<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['city', 'state_id'];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function adopters()
    {
        return $this->hasMany(Adopter::class, 'city_id');
    }

    protected static function booted()
    {
        static::deleting(function ($city) {
            $city->adopters->each->delete();
        });
    }
}
