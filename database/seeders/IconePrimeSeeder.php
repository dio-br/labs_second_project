<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconePrimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("icone_primes")->insert([
            "titre" => "Get in the lab",
            "icone" => "flaticon-002-caliper",
            "texte" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec"
        ]);
        DB::table("icone_primes")->insert([
            "titre" => "Projects online",
            "icone" => "flaticon-019-coffee-cup",
            "texte" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec"
        ]);
        DB::table("icone_primes")->insert([
            "titre" => "SMART MARKETING",
            "icone" => "flaticon-020-creativity",
            "texte" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec"
        ]);
        DB::table("icone_primes")->insert([
            "titre" => "SMART MARKETING",
            "icone" => "flaticon-008-team",
            "texte" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec"
        ]);
        DB::table("icone_primes")->insert([
            "titre" => "Projects online",
            "icone" => "flaticon-025-imagination",
            "texte" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec"
        ]);
        DB::table("icone_primes")->insert([
            "titre" => "Get in the lab",
            "icone" => "flaticon-037-idea",
            "texte" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec"
        ]);
       
    }
}
