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
        DB::table("testimonials")->insert([
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "image" => "01.jpg",
            "prenom" => "Michael Smith",
            "fonction" => "C.E.O Company"


        ]);
        DB::table("testimonials")->insert([
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "image" => "02.jpg",
            "prenom" => "Michael Smith",
            "fonction" => "C.E.O Company"


        ]);
        DB::table("testimonials")->insert([
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "image" => "03.jpg",
            "prenom" => "Michael Smith",
            "fonction" => "C.E.O Company"


        ]);
        
        DB::table("testimonials")->insert([
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "image" => "01.jpg",
            "prenom" => "Michael Smith",
            "fonction" => "C.E.O Company"


        ]);
        DB::table("testimonials")->insert([
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "image" => "02.jpg",
            "prenom" => "Michael Smith",
            "fonction" => "C.E.O Company"


        ]);
        DB::table("testimonials")->insert([
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "image" => "03.jpg",
            "prenom" => "Michael Smith",
            "fonction" => "C.E.O Company"


        ]);
      
       
    }
}
