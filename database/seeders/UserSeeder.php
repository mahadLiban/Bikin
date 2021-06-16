<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "role_id"=>1,
            "name"=>"Walter White",
            "email"=>"walter.l@outlook.be",
            "password"=>Hash::make("testtest"),
            'img'=>"team-1.jpg"
        ]);
        DB::table("users")->insert([
            "role_id"=>2,
            "name"=>"Sarah Jhonson",
            "email"=>"sarah.l@outlook.be",
            "password"=>Hash::make("testtest"),
            'img'=>"team-2.jpg"

        ]);
        DB::table("users")->insert([
            "role_id"=>3,
            "name"=>"William Anderson",
            "email"=>"william.l@outlook.be",
            "password"=>Hash::make("testtest"),
            'img'=>"team-3.jpg"

        ]);
        DB::table("users")->insert([
            "role_id"=>4,
            "name"=>"Amanda Jepson",
            "email"=>"amanda.l@outlook.be",
            "password"=>Hash::make("testtest"),
            'img'=>"team-4.jpg"

        ]);
    }
}
