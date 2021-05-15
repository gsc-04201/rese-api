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
            'user_id' => '1',
            'store_id' => '1',
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => '1',
            'store_id' => '2',
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => '1',
            'store_id' => '3',
        ];
        DB::table('likes')->insert($param);

    }
}
