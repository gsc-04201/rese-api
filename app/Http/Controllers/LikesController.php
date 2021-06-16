<?php

namespace App\Http\Controllers;

use App\Models\Like;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Like::with('store')->get();
        // $items = DB::table('stores')
        // ->join('areas', 'area_id', '=', 'areas.id')
        // ->join('genres', 'genre_id', '=', 'genres.id')
        // $items = DB::table('stores')
        // ->join('areas', 'stores.area_id', '=', 'genres.id')->get();
        // $items->join('areas', 'stores.area_id', '=', 'areas.id');
        // $contents = $items->get();




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
        $item = new Like;
        $item->user_id = $request->user_id;
        $item->store_id = $request->store_id;
        $item->save();
        return response()->json([
            'message' => 'Created successfully',
            'data' => $item
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {

        $item = Like::with('store.area', 'store.genre',)
            ->where('user_id', $like->id)
            ->get();


        if ($item) {
            return response()->json([
                'message' => 'OK Success!',
                'data' => $item
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
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Like $like)
    // {
    //     $item = Like::where('store_id', $like->id)->delete();

    //     if ($item) {
    //         return response()->json([
    //             'message' => 'Delete Success!',
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
        $like = Like::deleteLike($users_id, $request);
        if ($like) {
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
