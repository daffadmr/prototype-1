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
            'name' => 'Man City Home 2020 / 2021',
            'price' => '999000',
            'product_image' => 'city_home.png',
            'league_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'LOSC Lille Home 2020 / 2021',
            'price' => '899000',
            'product_image' => 'lille_home.png',
            'league_id' => 5
        ]);
        
        DB::table('products')->insert([
            'name' => 'Atl. Madrid Home 2020 / 2021',
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
            'name' => 'Bayern Home 2020 / 2021',
            'price' => '1299000',
            'product_image' => 'bayern_home.png',
            'league_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Chelsea Home 2020 / 2021',
            'price' => '1299000',
            'product_image' => 'chelsea_home.png',
            'league_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Man United Home 2020 / 2021',
            'price' => '1299000',
            'product_image' => 'mu_home.png',
            'league_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Real Madrid Home 2020 / 2021',
            'price' => '1399000',
            'product_image' => 'madrid_home.png',
            'league_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Juventus Home 2020 / 2021',
            'price' => '1199000',
            'product_image' => 'juventus_home.png',
            'league_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'Liverpool Home 2020 / 2021',
            'price' => '1199000',
            'product_image' => 'liverpool_home.png',
            'league_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'AC Milan Home 2020 / 2021',
            'price' => '999000',
            'product_image' => 'milan_home.png',
            'league_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'PSG Home 2020 / 2021',
            'price' => '1199000',
            'product_image' => 'psg_home.png',
            'league_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Barcelona Home 2020 / 2021',
            'price' => '1199000',
            'product_image' => 'barca_home.png',
            'league_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Dortmund Home 2020 / 2021',
            'price' => '999000',
            'product_image' => 'dortmund_home.png',
            'league_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Arsenal Home 2020 / 2021',
            'price' => '1299000',
            'product_image' => 'arsenal_home.png',
            'league_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Spurs Home 2020 / 2021',
            'price' => '1199000',
            'product_image' => 'spurs_home.png',
            'league_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'AS Monaco Home 2020 / 2021',
            'price' => '899000',
            'product_image' => 'monaco_home.png',
            'league_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Villareal Home 2020 / 2021',
            'price' => '899000',
            'product_image' => 'villareal_home.png',
            'league_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Nameset Premier League',
            'price' => '120000',
            'product_image' => 'premierleague_nameset.jpg',
            'league_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Nameset La Liga',
            'price' => '120000',
            'product_image' => 'laliga_nameset.jpg',
            'league_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Nameset Serie A',
            'price' => '120000',
            'product_image' => 'seriea_nameset.jpg',
            'league_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'Nameset Ligue 1',
            'price' => '120000',
            'product_image' => 'ligue1_nameset.jpg',
            'league_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Nameset Bundesliga',
            'price' => '120000',
            'product_image' => 'bundesliga_nameset.jpg',
            'league_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'RB Leipzig Home 2020 / 2021',
            'price' => '999000',
            'product_image' => 'leipzig_home.png',
            'league_id' => 2
        ]);
    }
}
