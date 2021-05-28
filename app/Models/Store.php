<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }


    // public function like()
    // {
    //     return $this->hasMany(Like::class);
    // }
    // protected $fillable = [
    //     'area_id', 'genre_id', 'name',
    // ];

}
