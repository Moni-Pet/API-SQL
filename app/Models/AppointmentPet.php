<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentPet extends Model
{
    use HasFactory;

    protected $table = 'appointment_pets';

    protected $fillable = [
        'apointment_id', 
        'pet_id'
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'apointment_id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }
}
