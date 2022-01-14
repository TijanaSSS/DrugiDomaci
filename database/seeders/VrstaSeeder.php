<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VrstaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('vrste')->insert([
            /*  'vrsta_sifra' => '1',
            'kategorija' => 'Torta'*/
            ['vrsta_sifra' => '1', 'kategorija' => 'Telefoni'],
            ['vrsta_sifra' => '2', 'kategorija' => 'Racunari'],
            ['vrsta_sifra' => '3', 'kategorija' => 'Slusalice'],
            ['vrsta_sifra' => '4', 'kategorija' => 'Punjaci']

     
 ]);    
}
}
