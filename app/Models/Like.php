<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    // use HasFactory;
    protected $primaryKey = 'user_id';
    public function likes()
    {
        return $this->hasMany(Like::Class, 'user_id');
    }
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

}
