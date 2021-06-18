<?php

namespace App\Http\Controllers;

use App\Models\Like;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function index()
    {
        $items = Like::with('store')->get();
        return response()->json([
            'message' => 'OK',
            'data' => $items
        ], 200);
    }

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

    // public function update(Request $request, Like $like)
    // {
    //     //
    // }

    public function destroy($user_id, Request $request)
    {
        $like = Like::deleteLike($user_id, $request);
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
