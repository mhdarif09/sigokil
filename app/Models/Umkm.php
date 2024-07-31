<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Umkm extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'store_name',
        'owner_name',
        'store_address',
        'store_photo',
        'phone',
        'email',
        'password',
        'category',
        'user_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
