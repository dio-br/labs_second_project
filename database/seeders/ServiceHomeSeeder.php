<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("service_homes")->insert([
            "icone" => "flaticon-023-flask",
            "titre" => "Get in the lab",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."

        ]);
        DB::table("service_homes")->insert([
            "icone" => "flaticon-011-compass",
            "titre" => "Project Online",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."

        ]);
        DB::table("service_homes")->insert([
            "icone" => "flaticon-037-idea",
            "titre" => "Smart Marketing",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."

        ]);
        DB::table("service_homes")->insert([
            "icone" => "flaticon-039-vector",
            "titre" => "Social Media",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."

        ]);
        DB::table("service_homes")->insert([
            "icone" => "flaticon-036-brainstorming",
            "titre" => "Brainstorming",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."

        ]);
        DB::table("service_homes")->insert([
            "icone" => "flaticon-026-search",
            "titre" => "Documented",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."

        ]);
        DB::table("service_homes")->insert([
            "icone" => "flaticon-018-laptop-1",
            "titre" => "Responsive",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."

        ]);
        DB::table("service_homes")->insert([
            "icone" => "flaticon-043-sketch",
            "titre" => "Retina Ready",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."

        ]);
        DB::table("service_homes")->insert([
            "icone" => "flaticon-012-cube",
            "titre" => "Ultra Modern",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."

        ]);
    }
}
