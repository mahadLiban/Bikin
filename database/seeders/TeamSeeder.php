<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'icone'=> 'logo twitter',
        ]);
        DB::table('teams')->insert([
            'icone'=> 'logo facebook',


        ]);
        DB::table('teams')->insert([
            'icone'=> 'logo instagram',



        ]);
        DB::table('teams')->insert([
            'icone'=> 'logo indeed',


        ]);
    }
}
