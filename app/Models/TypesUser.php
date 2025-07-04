<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypesUser extends Model
{
    use HasFactory;
    protected $table = 'types_user';
    protected $fillable = [
        'user_type',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'user_type_id');
    }
}
