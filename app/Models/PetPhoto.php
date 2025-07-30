<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PetPhoto extends Model
{
    use HasFactory, SoftDeletes;
    public $fillable = [
        'pet_id',
        'photo_link'
    ];

    public function pets() {
        return $this->belongsTo(Pet::class, 'pet_id');
    }
}
