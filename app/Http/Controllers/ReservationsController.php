<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Reservation::with('store')->get();
        return response()->json([
            'message' => 'OK',
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        $items = Reservation::with('store.area', 'store.genre',)
        ->where('user_id', $reservation->id)
            ->get();

        // $items = Reservation::where('user_id', $reservation->id)->with('store')->get();
        // $items = $item->with('area')->get();
        // $items = Store::with('area');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Reservation $reservation)
    // {
    //     $item = Reservation::where('id', $reservation->id)->delete();

    //     if ($item) {
    //         return response()->json([
    //             'message' => 'OK Success!',
    //             'data' => $item
    //         ], 200);
    //     } else {
    //         return response()->json([
    //             'message' => 'Not found',
    //         ], 404);
    //     }
    // }
    public function destroy($users_id, Request $request)
    {
        $reservation = Reservation::deleteReservation($users_id, $request);
        if ($reservation) {
            return response()->json([
                'message' => 'Favorite deleted successfully'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Favorite not found'
            ], 404);
        }
    }
}
