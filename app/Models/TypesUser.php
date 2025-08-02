<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypesUser extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'types_user';
    protected $fillable = [
        'user_type',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'user_type_id');
    }

    protected static function booted()
    {
        static::deleting(function ($typesUser) {
            $typesUser->users->each->delete();
        });
    }
}
