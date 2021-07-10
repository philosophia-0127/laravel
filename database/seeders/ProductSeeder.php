<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// app.php205行目に'DB' => Illuminate\Support\Facades\DB::class の記載あり。そちらから引っ張る必要がある。

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
                'product_name' => 'IchigoCake',
                'image' => '../images/ichigo.jpg',
                'description' => '美味しいですよ',
                'category_id' => '1',
                'price' => '220',
            ],
            [
                'product_name' => 'Puding',
                'image' => '../images/puding.jpg',
                'description' => 'おすすめです',
                'category_id' => '2',
                'price' => '170',
            ],
            [
                'product_name' => 'macalon',
                'image' => '../images/macalon.jpg',
                'description' => '人気商品です',
                'category_id' => '3',
                'price' => '190',
            ],
            [
                'product_name' => 'soda',
                'image' => '../images/soda.jpg',
                'description' => 'お子様におすすめです',
                'category_id' => '4',
                'price' => '120',
            ],
        ]);
    }
}
