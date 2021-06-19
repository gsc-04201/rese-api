<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder
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
            'name' => 'aaa',
            'email' => 'aaa@gmail.com',
            'password' => 'aaa1234',

        ];
        DB::table('users')->insert($param);
        $param = [
            'id' => '2',
            'name' => 'bbb',
            'email' => 'bbb@gmail.com',
            'password' => 'bbb1234',

        ];
        DB::table('users')->insert($param);
        $param = [
            'id' => '3',
            'name' => 'ccc',
            'email' => 'ccc@gmail.com',
            'password' => 'ccc',

        ];
        DB::table('users')->insert($param);
    }
}
