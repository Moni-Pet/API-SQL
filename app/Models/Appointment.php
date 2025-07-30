<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 
        'pet_id', 
        'status', 
        'descripcion', 
        'total_price', 
        'creation_date', 
        'date', 
        'transferce_code', 
        'type_appointment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

    public function details()
    {
        return $this->hasMany(AppointmentDetail::class, 'appointment_id');
    }

    public function appointmentPets()
    {
        return $this->hasMany(AppointmentPet::class, 'appointment_id');
    }

    protected static function booted()
    {
        static::deleting(function ($appointment) {
            $appointment->details->each->delete();
            $appointment->appointmentPets->each->delete();
        });
    }
}
