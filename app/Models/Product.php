<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // Product can be liked by many Users (Many-to-Many)
    public function likedByUsers()
    {
        return $this->belongsToMany(User::class, 'likes');
    }
    // Product can be reserved by many Users (One-to-Many)
    public function reservedByUsers()
    {
        return $this->hasMany(Reservation::class);
    }
    // Product can be flagged by many Users (One-to-Many)
    public function flaggedByUsers()
    {
        return $this->belongsToMany(User::class, 'flags')->withPivot('flag_reason');
    }
}
