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
            ['sifra' => '777', 'naziv' => 'Samsung Galaxy S21',
            'karakteristike' => 'Dostupan', 'cena' => 48000, 
            'slika' => 'https://www.mytrendyphone.eu/images/Samsung-Galaxy-S21-5G-128GB-Phantom-Grey-8806090892776-18012021-01-p.jpg'
            ],
        
            ['sifra' => '222', 'naziv' => 'Samsung Galaxy A52',
            'karakteristike' => 'Dostupan', 'cena' => 2900, 
            'slika' => 'https://www.mobilplanet.net/wp-content/uploads/2021/05/Samsung-Galaxy-A52-Duos-128GB-Black-8806090987557-20032021-01-p.jpg'
            ],
            
            ['sifra' => '333', 'naziv' => 'Samsung Galaxy S20 FE',
            'karakteristike' => 'Dostupan', 'cena' => 52000, 
            'slika' => 'https://dijaspora.shop/media/catalog/product/cache/1/thumbnail/1000x1000/9df78eab33525d08d6e5fb8d27136e95/l/a/lava.jpg'
            ],
            
            ['sifra' => '444', 'naziv' => 'Torta sa orasima',
            'karakteristike' => 'Dostupan', 'cena' => 3300, 'slika' => 'https://spicedblog.com/wp-content/uploads/2018/08/Maple-Walnut-Cake1-600x900.jpg'
            ],
            
            ['sifra' => '555', 'naziv' => 'Iphone 12 PRO MAX',
             'karakteristike' => 'Dostupan', 'cena' => 2600, 
             'slika' => 'https://food.fnr.sndimg.com/content/dam/images/food/fullset/2004/1/23/1/ss1d26_red_velvet_cake.jpg.rend.hgtvcom.616.462.suffix/1371584132020.jpeg'
            ],
            
            ['sifra' => '666', 'naziv' => 'Iphone 13 PRO',
             'karakteristike' => 'Dostupan', 'cena' => 115000, 
             'slika' => 'https://www.mytrendyphone.rs/images/Puro-0-3-Nude-TPU-Case-for-iPhone-12-Pro-Max-Transparent-8033830296208-16102020-01-p.jpg'
            ]      
        
        ]);
    }
}
