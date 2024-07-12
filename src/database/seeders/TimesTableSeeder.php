<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'time' => '17:00'
        ];
        DB::table('times')->insert($param);
        $param = [
            'time' => '17:30'
        ];
        DB::table('times')->insert($param);
        $param = [
            'time' => '18:00'
        ];
        DB::table('times')->insert($param);
        $param = [
            'time' => '18:30'
        ];
        DB::table('times')->insert($param);
        $param = [
            'time' => '19:00'
        ];
        DB::table('times')->insert($param);
        $param = [
            'time' => '19:30'
        ];
        DB::table('times')->insert($param);
        $param = [
            'time' => '20:00'
        ];
        DB::table('times')->insert($param);
        $param = [
            'time' => '20:30'
        ];
        DB::table('times')->insert($param);
        $param = [
            'time' => '21:00'
        ];
        DB::table('times')->insert($param);
        $param = [
            'time' => '21:30'
        ];
        DB::table('times')->insert($param);
        $param = [
            'time' => '22:00'
        ];
        DB::table('times')->insert($param);
    }
}
