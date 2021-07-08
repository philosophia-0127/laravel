<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name' => 'ichigo_cake',
                'image' => '../images/ichigo.jpg',
                'description' => '美味しいですよ',
                'category_id' => '0',
                'price' => '220',
            ],
            [
                'product_name' => 'puding',
                'image' => '../images/puding.jpg',
                'description' => 'おすすめです',
                'category_id' => '1',
                'price' => '170',
            ],
        ]);
    }
}
