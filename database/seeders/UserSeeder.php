<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Aさん',
                'email' => 'aaa@aaa.com',
                'password' => 'aaaaaaaa',
                'zip_code' => '1234567',
                'address' => '東京都板橋区高島平1-1-1',
                'ship_address' => '東京都板橋区高島平1-1-1',
                'user_tel' => '04412345678',
                'menber_status' => 'ProgressAccount',
            ],
            [
                'name' => 'Bさん',
                'email' => 'bbb@bbb.com',
                'password' => 'bbbbbbbb',
                'zip_code' => '1234567',
                'address' => '東京都板橋区高島平1-1-1',
                'ship_address' => '東京都板橋区高島平1-1-1',
                'user_tel' => '04412345678',
                'menber_status' => 'DeleteAccount',
            ],
        ]);
    }
}
