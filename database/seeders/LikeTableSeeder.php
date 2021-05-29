<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => '1',
            'user_id' => '1',
            'store_id' => '1',
        ];
        DB::table('likes')->insert($param);

        $param = [
            'id' => '2',
            'user_id' => '1',
            'store_id' => '2',
        ];
        DB::table('likes')->insert($param);

        $param = [
            'id' => '3',
            'user_id' => '1',
            'store_id' => '3',
        ];
        DB::table('likes')->insert($param);

        $param = [
            'id' => '4',
            'user_id' => '2',
            'store_id' => '3',
        ];
        DB::table('likes')->insert($param);

    }
}
