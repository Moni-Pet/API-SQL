<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

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
    public function details()
    {
        return $this->hasMany(AppointmentDetail::class, 'service_id');
    }
}
