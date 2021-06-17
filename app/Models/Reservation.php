<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


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


    // 更新機能保留
    // public static function putReservation($user_id, Request $request)
    // {
    //     $reservation = Reservation::where('user_id', $user_id)->where
    //     ('store_id', $request->store_id)->first();
    //     return $reservation;
    // }

    public static function deleteReservation($user_id, Request $request)
    {
        $reservation = Reservation::where('user_id', $user_id)->where('store_id', $request->store_id)->delete();
        return $reservation;
    }
}
