<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 0
        DB::table('titres')->insert([
            'titre' => "Voluptatem dignissimos provident quasi",
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit ',
            'btnTxt'=>"About us"
            
        ]);
// 1
        DB::table('titres')->insert([
            'titre' => "Build Better Websites With Bikin",
            'description'=> 'We are team of talented designers making websites with Bootstrap',
            'btnTxt'=>"Get Started "

        ]);

        // 2
        DB::table('titres')->insert([
            'titre' => "Features",
            'description'=> 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'btnTxt'=>""

        ]);
// 3
        DB::table('titres')->insert([
            'titre' => "Services",
            'description'=> 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'btnTxt'=>""

        ]);
        // 4
        DB::table('titres')->insert([
            'titre' => "Portfolio",
            'description'=> 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'btnTxt'=>""

        ]);
// 5
        DB::table('titres')->insert([
            'titre' => "Team",
            'description'=> 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'btnTxt'=>""

        ]);
        // 6
        DB::table('titres')->insert([
            'titre' => "Contact",
            'description'=> 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'btnTxt'=>""

        ]);
        DB::table('titres')->insert([
            'titre' => "Testimonials",
            'description'=> 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'btnTxt'=>""

        ]);

        
    }
}
