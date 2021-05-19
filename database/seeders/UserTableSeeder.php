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
            'name' => 'keiya',
            'email' => 'aaa',
            'password' => 'password',

        ];
        DB::table('users')->insert($param);
        $param = [
            'id' => '2',
            'name' => 'keiya2',
            'email' => 'bbb',
            'password' => 'password2',

        ];
        DB::table('users')->insert($param);
        $param = [
            'id' => '3',
            'name' => 'keiya3',
            'email' => 'ccc',
            'password' => 'password3',

        ];
        DB::table('users')->insert($param);
    }
}
