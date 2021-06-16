<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'footerTitre1' => "Bikin",
            'footerTitre2' => "Useful Links",
            'footerTitre3' => "Our Services",
            'footerTitre4' => "Join Our Newsletter",
            'description'=> 'A108 Adam Street New York, NY 535022 United States',
            'description2'=> 'Tamen quem nulla quae legam multos aute sint culpa legam noster magna',
            'phone' => "+1 5589 55488 55",
            'email'=> 'info@example.com',
            'li1' => "Home" ,
            'li2'=> 'About us',
            'li3' => "Service",
            'li4'=> 'Terms of service',
            'li5' => "Privaxy policy",
            'li6'=> 'Web Design',
            'li7' => "web development",
            'li8'=> 'Product Managment',
            'li9' => "Marketing",
            'li10'=> 'Graphic Design',
            'btnTxt' => "Subcribe",           
        ]);
        
    }
}
