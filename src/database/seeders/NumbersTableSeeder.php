<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'number' => '1人'
        ];
        DB::table('numbers')->insert($param);
        $param = [
            'number' => '2人'
        ];
        DB::table('numbers')->insert($param);
        $param = [
            'number' => '3人'
        ];
        DB::table('numbers')->insert($param);
        $param = [
            'number' => '4人'
        ];
        DB::table('numbers')->insert($param);
        $param = [
            'number' => '5人'
        ];
        DB::table('numbers')->insert($param);
        $param = [
            'number' => '6人'
        ];
        DB::table('numbers')->insert($param);
        $param = [
            'number' => '7人'
        ];
        DB::table('numbers')->insert($param);
        $param = [
            'number' => '8人'
        ];
        DB::table('numbers')->insert($param);
    }
}
