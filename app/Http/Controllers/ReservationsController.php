<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index()
    {
        $items = Reservation::with('store')->get();
        return response()->json([
            'message' => 'OK',
            'data' => $items
        ], 200);
    }

    public function store(Request $request)
    {
        $item = new Reservation;
        $item->user_id = $request->user_id;
        $item->store_id = $request->store_id;
        $item->date = $request->date;
        $item->time = $request->time;
        $item->number = $request->number;
        $item->save();
        return response()->json([
            'message' => 'Created successfully',
            'data' => $item
        ], 200);
    }

    public function show(Reservation $reservation)
    {
        $items = Reservation::with('store.area', 'store.genre',)
        ->where('user_id', $reservation->id)
        ->get();

        if ($items) {
            return response()->json([
                'message' => 'OK Success!',
                'data' => $items
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }

    // 更新機能保留
    // public function update($user_id, Reservation $reservation, Request $request,)
    // {
    //     $reservation = Reservation::putReservation($user_id, $request);
    //     // $item = Reservation::where($user_id, $request->store_id)->first();
    //     $reservation->user_id = $request->user_id;
    //     $reservation->store_id = $request->store_id;
    //     $reservation->date = $request->date;
    //     $reservation->time = $request->time;
    //     $reservation->number = $request->number;
    //     $reservation->save();
    //     if ($reservation) {
    //         return response()->json([
    //             'message' => 'Updated successfully',
    //         ], 200);
    //     } else {
    //         return response()->json([
    //             'message' => 'Not found',
    //         ], 404);
    //     }
    // }
    

    public function destroy($user_id, Request $request)
    {
        $reservation = Reservation::deleteReservation($user_id, $request);
        if ($reservation) {
            return response()->json([
                'message' => 'reservation deleted successfully'
            ], 200);
        } else {
            return response()->json([
                'message' => 'reservation not found'
            ], 404);
        }
    }
}
