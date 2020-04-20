<?php

use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'word' => '1:ごっつえやん！',
        ];
        DB::table('words')->insert($param);
     
        $param = [
            'word' => '1:ナイス',
        ];
        DB::table('words')->insert($param);
     
        $param = [
            'word' => '2:ドンマイ!',
        ];
        DB::table('words')->insert($param);
    }
}
