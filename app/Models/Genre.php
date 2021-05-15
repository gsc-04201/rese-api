<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function store() 
    {
        return $this->hasMany(Store::class);
    }
}
