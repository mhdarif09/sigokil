<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'category',
        'description',
        'weight',
        'price',
        'stock',
        'condition',
        'preorder',
        'main_photo',
        'product_photo_1',
        'product_photo_2',
        'product_photo_3',
        'video',
    ];

    // Relationship to User (assuming a user can have many products)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}