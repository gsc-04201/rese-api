<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        $query = Store::all();

        $search1 = $request->input('area_id');
        $search2 = $request->input('genre_id');
        $search3 = $request->input('name');

        // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した棋力と一致するカラムを取得します
        if ($request->has('area_id') && $search1 != ('')) {
            $query->where('area_id', $search1)->get($query);
        }

        if ($request->has('email')) {
            $items = DB::table('users')->where('email', $request->email)->get();
            return response()->json([
                'message' => 'User got successfully',
                'data' => $items
            ], 200);
        } else {
            return response()->json(['status' => 'not found'], 404);
        }

        // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した好きな戦法と一致するカラムを取得します
        if ($request->has('genre_id') && $search2 != ('')) {
            $query->where('genre_id', $search2)->get($default = null);
        }

        // ユーザ名入力フォームで入力した文字列を含むカラムを取得します
        if ($request->has('name') && $search3 != '') {
            $query->where('name', 'like', '%' . $search3 . '%')->get($default = null);
        }
        



        return response()->json([
            'message' => 'OK',
            'data' => $query
        ], 200);
    }
    
}
