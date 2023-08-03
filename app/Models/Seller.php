<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $table = 'sellers'; // Make sure the table name is 'sellers'
    protected $primaryKey = 'user_id'; // Set the primary key as 'user_id' as it's the foreign key to the users table
    protected $fillable = [
        'user_id',
        'shop_name',
        'full_address_street',
        'full_address_city',
        'full_address_state',
        'full_address_zip',
        'business_hours',
        'calendar_year',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
