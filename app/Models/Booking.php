<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'chalet_id',
        'booking_date',
        'status',
    ];
    
    public function customer(){
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function chalet(){
        return $this->belongsTo(Chalet::class, 'chalet_id');
    }
}
