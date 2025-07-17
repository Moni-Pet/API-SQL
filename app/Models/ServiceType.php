<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    protected $table = 'types_services';

    protected $fillable = [
        'type_service'
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'type_service_id');
    }
}
