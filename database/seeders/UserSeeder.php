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
            'name' => 'Admin',
            'email' => 'admin_jerseyfox@gmail.com',
            'password' => bcrypt('Admin123!'),
            'is_admin' => 1,
            'alamat' => 'Jakarta',
            'no_hp' => '0212345678'
        ]);
    }
}
