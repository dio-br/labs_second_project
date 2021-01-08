<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlocRapidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("bloc_rapids")->insert([
            "image" => "card-1.jpg",
            "titre" => "Get in the Lab",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        DB::table("bloc_rapids")->insert([
            "image" => "card-2.jpg",
            "titre" => "Project Online",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        DB::table("bloc_rapids")->insert([
            "image" => "card-3.jpg",
            "titre" => "Smart Marketing",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
    }
}
