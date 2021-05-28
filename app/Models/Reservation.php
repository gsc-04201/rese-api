<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    // public function user()
    // {
    //     return $this->belongsTo(User::Class);
    // }
    public function store()
    {
        return $this->belongsTo(Store::Class);
    }



    // protected $primaryKey = 'user_id';
    // public function reservations()
    // {
    //     return $this->hasOne(Reservatios::Class, 'user_id');
    // }
    
    // use HasFactory;
}
