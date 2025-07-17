<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetPhoto extends Model
{
    use HasFactory;
    public $fillable = [
        'pet_id',
        'photo_link'
    ];

    public function Pets() {
        return $this->belongsTo(Pet::class, 'pet_id');
    }
}
