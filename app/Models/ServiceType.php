<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceType extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'types_services';

    protected $fillable = [
        'type_service',
        'icono'
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'type_service_id');
    }

    protected static function booted()
    {
        static::deleting(function ($serviceType) {
            $serviceType->services->each->delete();
        });
    }
}
