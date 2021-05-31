<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Manchester City Home 2020 / 2021',
            'price' => '999000',
            'product_image' => 'city_home.png',
            'league_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Chelsea Home 2020 / 2021',
            'price' => '1299000',
            'product_image' => 'chelsea_home.png',
            'league_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Atletico Madrid Home 2020 / 2021',
            'price' => '1299000',
            'product_image' => 'atleti_home.png',
            'league_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Inter Milan Home 2020 / 2021',
            'price' => '1299000',
            'product_image' => 'inter_home.png',
            'league_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'Bayern Munchen Home 2020 / 2021',
            'price' => '1299000',
            'product_image' => 'bayern_home.png',
            'league_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Lille Home 2020 / 2021',
            'price' => '899000',
            'product_image' => 'lille_home.png',
            'league_id' => 5
        ]);
    }
}
