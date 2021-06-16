<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiltreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filtres')->insert([
            'nom' => "app",
        ]);
        DB::table('filtres')->insert([
            'nom' => "card",
        ]);
        DB::table('filtres')->insert([
            'nom' => "web",
            
        ]);
    }
}

