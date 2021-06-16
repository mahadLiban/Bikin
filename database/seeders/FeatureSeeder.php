<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            'img' => "{{asset(/img/features-1.png)}}",
            'petitTitre'=> 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
            'sousTitre'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            'li1' => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            'li2' => "Duis aute irure dolor in reprehenderit in voluptate velit.",
            'li3' => "Ullam est qui quos consequatur eos accusamus.",
            'description' => "",
        ]);

        DB::table('features')->insert([
            'img' => "Ceci sera un image",
            'petitTitre'=> 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
            'sousTitre'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            'li1' => "",
            'li2' => "",
            'li3' => "",
            'description' => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
        ]);

        DB::table('features')->insert([
            'img' => "Ceci sera un image",
            'petitTitre'=> 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
            'sousTitre'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            'li1' => " Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            'li2' => "Duis aute irure dolor in reprehenderit in voluptate velit.",
            'li3' => " Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.",
            'description' => "",
        ]);

        DB::table('features')->insert([
            'img' => "Ceci sera un image",
            'petitTitre'=> 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
            'sousTitre'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            'li1' => "",
            'li2' => "",
            'li3' => "",
            'description' => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
        ]);
    }
}
