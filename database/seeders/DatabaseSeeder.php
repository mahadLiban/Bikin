<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AboutSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(FiltreSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(ImgortfolioSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TitreSeeder::class);
        $this->call(UserSeeder::class);













    }
}
