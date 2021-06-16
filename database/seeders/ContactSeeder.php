<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'logo' => "bx bx-map",
            'text'=> 'Our Address',
            'email1'=>"",
            'description'=> 'A108 Adam Street, New York, NY 535022',
        ]);

        DB::table('contacts')->insert([
            'logo' => "bx bx-envelope",
            'text'=> 'Email Us',
            'email1'=>"info@example.com",
            'description'=> 'contact@example.com',
        ]);

        DB::table('contacts')->insert([
            'logo' => "bx bx-phone-call",
            'text'=> 'Call us',
            'email1'=>"",
            'description'=> 'A108 Adam Street, New York, NY 535022',
        ]);
    }
}
