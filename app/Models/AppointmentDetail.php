<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentDetail extends Model
{
    use HasFactory;

    protected $table = 'appointment_details';

    protected $fillable = [
        'service_id', 
        'apointment_id', 
        'price_service', 
        'discount'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'apointment_id');
    }
}