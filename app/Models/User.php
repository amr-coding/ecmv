<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'phone_number',
        'zip_code',
        'email',
        'seller',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function seller()
    {
        return $this->hasOne(Seller::class);
    }
    //  User can like many Products (Many-to-Many)
    public function likedProducts()
    {
        return $this->belongsToMany(Product::class, 'likes');
    }
    //  User can reserve many Products (One-to-Many)
    public function reservedProducts()
    {
        return $this->hasMany(Reservation::class);
    }
    // User can send many Messages (One-to-Many)
    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }
    // User can receive many Messages (One-to-Many)
    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
    // User can flag many Products (One-to-Many)
    public function flaggedProducts()
    {
        return $this->belongsToMany(Product::class, 'flags')->withPivot('flag_reason');
    }
    // user is admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
