<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fruits = [
            [
                'name' => 'キウイ',
                'price' => 800,
                'image' => 'public/images/kiwi.png',
                'description' => 'キウイは甘みと酸味のバランスが絶妙なフルーツです。ビタミンCなどの栄養素も豊富のため、美肌効果や疲労回復効果も期待できます。',
            ],
            [
                'name' => 'バナナ',
                'price' => 600,
                'image' => 'public/images/banana.png',
                'description' => '低カロリーでありながら栄養満点のため、ダイエット中の方にもおすすめの商品です。',
            ],
        ];

        DB::table('products')->insert($fruits);
    }
}

