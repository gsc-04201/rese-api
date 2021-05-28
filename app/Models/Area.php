<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Area extends Model
{
    public function store()
    {
        return $this->hasMany(
            Store::class);
        
    }

    
}
