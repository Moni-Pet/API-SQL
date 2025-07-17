<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_service_id', 
        'service', 
        'price', 
        'discounts'
    ];

    public function type()
    {
        return $this->belongsTo(ServiceType::class, 'type_service_id');
    }
}
