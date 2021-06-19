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
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => 'test1234',

        ];
        DB::table('users')->insert($param);
        $param = [
            'id' => '2',
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => 'password2',

        ];
        DB::table('users')->insert($param);
        $param = [
            'id' => '3',
            'name' => 'test3',
            'email' => 'test3@gmail.com',
            'password' => 'password3',

        ];
        DB::table('users')->insert($param);
    }
}
