<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnPet extends Model
{
    use HasFactory;

    protected $table = 'return_pets';

    protected $fillable = [
        'adoption_id', 
        'date', 
        'comment'
    ];

    public function adoption()
    {
        return $this->belongsTo(Adoption::class, 'adoption_id');
    }
}
