<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Petar Petrovic',
            'email' => 'petar.petrovic.19@gmail.com',
            'password' => Hash::make('33333')
        ]);
    }
}
