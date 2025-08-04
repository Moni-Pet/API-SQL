<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GadgetType extends Model
{
    protected $fillable = [
        'gadget_type', 
        'photo_url'
    ];

    public function gadgets()
    {
        return $this->hasMany(Gadget::class);
    }
}
