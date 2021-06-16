<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImgortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imgortfolios')->insert([
            'filtre_id'=>1,
            'img' => "Ceci est une image",
        ]);
        DB::table('imgortfolios')->insert([
            'filtre_id'=>1,
            'img' => "Ceci est une image",
        ]);
        DB::table('imgortfolios')->insert([
            'filtre_id'=>1,
            'img' => "Ceci est une image",
        ]);
        DB::table('imgortfolios')->insert([
            'filtre_id'=>2,
            'img' => "Ceci est une image",
        ]);
        DB::table('imgortfolios')->insert([
            'filtre_id'=>2,
            'img' => "Ceci est une image",
        ]);
        DB::table('imgortfolios')->insert([
            'filtre_id'=>2,
            'img' => "Ceci est une image",
        ]);
        DB::table('imgortfolios')->insert([
            'filtre_id'=>3,
            'img' => "Ceci est une image",
        ]);
        DB::table('imgortfolios')->insert([
            'filtre_id'=>3,
            'img' => "Ceci est une image",
        ]);
        DB::table('imgortfolios')->insert([
            'filtre_id'=>3,
            'img' => "Ceci est une image",
        ]);

    }
}
