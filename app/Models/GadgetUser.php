<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GadgetUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'gadget_users';

    protected $fillable = [
        'gadget_id', 
        'user_id'
    ];

    public function gadget()
    {
        return $this->belongsTo(Gadget::class, 'gadget_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
