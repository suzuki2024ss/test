<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    public function run()
    {
        DB::table('images')->insert([
            [
                'name' => 'kiwi',
                'path' => 'images/kiwi.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
