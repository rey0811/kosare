<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FutsalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('futsals')->insert([
            [
            'name' => 'フットサルポイント川崎',
            'place' => 'kanagawa',
            'url' => 'http://futsalpoint.net/shisetsu/salu/kawasaki/',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
        ],
            [
            'name' => 'アディダスフットサルパーク川崎',
            'place' => 'kanagawa',
            'url' => 'https://www.tokyu-sports.com/football/adidas-futsalpark/kawasaki.html',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
        ],
        ]);
    }
}
