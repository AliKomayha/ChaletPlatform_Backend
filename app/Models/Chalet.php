<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Chalet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
        'price',
        'owner_id',
        'capacity',
        'rooms',
        'status',
    ];

    public function owner(){
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function booking (){
        return $this->hasMany(Booking::class, 'chalet_id');
    }

    public function customers()
    {
        return $this->hasManyThrough(
            User::class,       // Final model (User)
            Booking::class,    // Intermediate model (Booking)
            'chalet_id',       // Foreign key on bookings
            'id',              // Foreign key on users
            'id',              // Local key on chalets
            'customer_id'      // Local key on bookings
        );
    }
}
