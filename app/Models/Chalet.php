<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Chalet extends Model
{
    use HasFactory;

    //protected $fillable = [];

    public function owner(){
        return $this->belongsTo(User::class, 'owner_id');
    }
}
