<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Like extends Model
{
    // use HasFactory;
    // user_idが持つ全データ取得

    // protected $primaryKey = 'user_id';
    // public function likes()
    // {
    //     return $this->hasMany(Like::Class, 'user_id');
    // }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public static function deleteLike($user_id, Request $request)
    {
        $favorite = Like::where('user_id', $user_id)->where('store_id', $request->store_id)->delete();
        return $favorite;
    }



}
