<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{
    protected $fillable = [
        'gadget_type_id',
        'pet_id',
        'mac_address',
        'alias',
    ];

    public function type()
    {
        return $this->belongsTo(GadgetType::class, 'gadget_type_id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'gadget_user');
    }
}
