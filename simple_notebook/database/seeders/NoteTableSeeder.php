<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'subject'=>'TestText',
            'text'=>'testtesttesttest',
            'user_id'=>1,
            'is_private'=>'0',
        ];
        DB::table('notebooks')->insert($param);
        $param = [
            'subject'=>'aaaa',
            'text'=>'fefaefa',
            'user_id'=>1,
            'is_private'=>'0',
        ];
        DB::table('notebooks')->insert($param);
    }
}
