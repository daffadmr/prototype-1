<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leagues')->insert([
            'league_name' => 'Premier League',
            'league_country' => 'Inggris',
            'league_image' => 'premier_league.png'
        ]);

        DB::table('leagues')->insert([
            'league_name' => 'Bundesliga',
            'league_country' => 'Jerman',
            'league_image' => 'bundesliga.png'
        ]);

        DB::table('leagues')->insert([
            'league_name' => 'Serie A',
            'league_country' => 'Italia',
            'league_image' => 'serie_a.png'
        ]);

        DB::table('leagues')->insert([
            'league_name' => 'La Liga',
            'league_country' => 'Spanyol',
            'league_image' => 'la_liga.png'
        ]);

        DB::table('leagues')->insert([
            'league_name' => 'Ligue 1',
            'league_country' => 'Prancis',
            'league_image' => 'ligue_one.png'
        ]);
    }
}
