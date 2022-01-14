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
           ['sifra' => '777', 'naziv' => 'Svarcvald torta',
         'karakteristike' => '2.5kg', 'cena' => 3200, 'slika' => 'https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/German-Black-Forest-Cake_exps57998_THRRA2874593D01_30_5b_RMS.jpg'
        ],
        ['sifra' => '222', 'naziv' => 'Vanila torta',
        'karakteristike' => '3kg', 'cena' => 2900, 'slika' => 'https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/Best-Vanilla-Cake_EXPS_TOHAM20_245451_E11_13_19b.jpg'
],
[
    'sifra' => '333', 'naziv' => 'Voćna torta',
             'karakteristike' => '2kg', 'cena' => 2600, 'slika' => 'https://cdn.shopify.com/s/files/1/0056/3852/0877/files/20200521_025629_large.jpg?v=1590022893'

],

[
    'sifra' => '444', 'naziv' => 'Torta sa orasima',
    'karakteristike' => '2.5kg', 'cena' => 3300, 'slika' => 'https://spicedblog.com/wp-content/uploads/2018/08/Maple-Walnut-Cake1-600x900.jpg'

],

[
    'sifra' => '555', 'naziv' => 'Velvet torta',
             'karakteristike' => '2.5kg', 'cena' => 2600, 'slika' => 'https://food.fnr.sndimg.com/content/dam/images/food/fullset/2004/1/23/1/ss1d26_red_velvet_cake.jpg.rend.hgtvcom.616.462.suffix/1371584132020.jpeg'

],
[
    'sifra' => '666', 'naziv' => 'Kinder bueno torta',
             'karakteristike' => '2.5kg', 'cena' => 3600, 'slika' => 'https://sugaryums.co.uk/wp-content/uploads/2021/05/Kinder-Bueno-Cake-SugarYums-2.jpg'

]      
        
        ]);
    }
}
