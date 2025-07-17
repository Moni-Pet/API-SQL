<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionFollowup extends Model
{
    use HasFactory;
    protected $table = 'adoption_followups';

    protected $fillable = [
        'adoption_id', 
        'follow_up_date', 
        'animal_condition', 
        'comment'
    ];

    public function adoption()
    {
        return $this->belongsTo(Adoption::class, 'adoption_id');
    }
}
