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
            'name' => 'futsal 1',
            'place' => 'tokyo',
            'url' => 'xxx',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
        ],
            [
            'name' => 'futsal 2',
            'place' => 'kanagawa',
            'url' => 'yyy',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
        ],
        ]);
    }
}
