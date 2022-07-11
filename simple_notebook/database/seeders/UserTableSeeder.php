<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
            'user_name' => 'gingin',
            'email' => 'gingin@gmail.com',
            'password' => Hash::make('passpass'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'user_name' => 'helloMan',
            'email' => 'hello@gmail.com',
            'password' => Hash::make('hellohello'),
        ];
        DB::table('users')->insert($param);
    }
}
