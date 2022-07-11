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
            'subject'=>'パスタの作り方',
            'text'=>'材料：麺',
            'user_id'=>1,
            'is_private'=>'0',
        ];
        DB::table('notebooks')->insert($param);

        $param = [
            'subject'=>'こんにちは',
            'text'=>'ハロー',
            'user_id'=>2,
            'is_private'=>'0',
        ];
        DB::table('notebooks')->insert($param);

        $param = [
            'subject'=>'今日の出来事',
            'text'=>'・トイレに行った',
            'user_id'=>2,
            'is_private'=>'0',
        ];
        DB::table('notebooks')->insert($param);

        $param = [
            'subject'=>'予定',
            'text'=>'東京ドームシティに行く',
            'user_id'=>2,
            'is_private'=>'1',
        ];
        DB::table('notebooks')->insert($param);
    }
}
