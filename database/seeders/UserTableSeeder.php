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
            'name' => 'keiya',
            'email' => 'aaa',
            'password' => 'password',

        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'keiya2',
            'email' => 'bbb',
            'password' => 'password2',

        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'keiya3',
            'email' => 'ccc',
            'password' => 'password3',

        ];
        DB::table('users')->insert($param);
    }
}
