<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'logo' => "logo feuille",
            'petitTitre1' => "Corporis voluptates sit",
            'sousTitre1' => "Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip",
        ]);
        DB::table('abouts')->insert([
            'logo' => "logo feuille",
            'petitTitre1' => "Corporis voluptates sit",
            'sousTitre1' => "Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip",
        ]);

        DB::table('abouts')->insert([
            'logo' => "logo cube",
            'petitTitre1' => "Ullamco laboris nisi",
            'sousTitre1' => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt",
        ]);

        DB::table('abouts')->insert([
            'logo' => "logo img",
            'petitTitre1' => "Labore consequatur",
            'sousTitre1' => "Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere",
        ]);

        DB::table('abouts')->insert([
            'logo' => "logo protect",
            'petitTitre1' => "Beatae veritatis",
            'sousTitre1' => "Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta",
        ]);
    }
}
