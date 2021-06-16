<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'paragraphe' => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            ",
            'pdp'=> 'testimonials-1.jpg',
            'nom'=>"Saul Goodman",
            'role'=>"Ceo Founder",
        ]);

        DB::table('testimonials')->insert([
            'paragraphe' => "Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.",
            'pdp'=> 'testimonials-2.jpg',
            'nom'=>"Sara Wilsson",
            'role'=>"Designer",
        ]);

        DB::table('testimonials')->insert([
            'paragraphe' => "Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.",
            'pdp'=> 'testimonials-3.jpg',
            'nom'=>"Jena Karlis",
            'role'=>"Store Owner",
        ]);

        DB::table('testimonials')->insert([
            'paragraphe' => "Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.",
            'pdp'=> 'testimonials-4.jpg',
            'nom'=>"John Larson",
            'role'=>"Entrepreneur",
        ]);
        DB::table('testimonials')->insert([
            'paragraphe' => "Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.",
            'pdp'=> 'testimonials-5.jpg',
            'nom'=>"John Larson",
            'role'=>"Entrepreneur",
        ]);
    }
}
