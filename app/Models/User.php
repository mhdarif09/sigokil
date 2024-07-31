<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'user_type',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the UMKM associated with the user.
     */
    public function umkm(): HasOne
    {
        return $this->hasOne(Umkm::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
