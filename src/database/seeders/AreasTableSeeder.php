<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'area' => '東京都'
        ];
        DB::table('genres')->insert($param);

        $param = [
            'genre' => '大阪府'
        ];
        DB::table('genres')->insert($param);

        $param = [
            'genre' => '福岡県'
        ];
        DB::table('genres')->insert($param);

    }
}
