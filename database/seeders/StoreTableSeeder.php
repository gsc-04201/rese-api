<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '仙人',
            'img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
            'detail' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。',
            'area_id' => '1',
            'genre_id' => '1',
        ];
        DB::table('stores')->insert($param);
        $param = [
            'name' => '牛助',
            'img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
            'detail' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。',
            'area_id' => '2',
            'genre_id' => '2',
        ];
        DB::table('stores')->insert($param);
        $param = [
            'name' => '戦慄',
            'img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
            'detail' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。',
            'area_id' => '3',
            'genre_id' => '3',
        ];
        DB::table('stores')->insert($param);
        $param = [
            'name' => 'ルーク',
            'img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
            'detail' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。',
            'area_id' => '1',
            'genre_id' => '4',
        ];
        DB::table('stores')->insert($param);

    }
}
