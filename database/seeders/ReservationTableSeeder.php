<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationTableSeeder extends Seeder
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
            'date' => '2021-04-01',
            'time' => '17:00',
            'number' => '3',
        ];
        DB::table('reservations')->insert($param);
        $param = [
            'user_id' => '1',
            'store_id' => '2',
            'date' => '2021-04-01',
            'time' => '17:00',
            'number' => '3',
        ];
        DB::table('reservations')->insert($param);
        $param = [
            'user_id' => '1',
            'store_id' => '3',
            'date' => '2021-04-01',
            'time' => '17:00',
            'number' => '3',
        ];
        DB::table('reservations')->insert($param);
    }
}
