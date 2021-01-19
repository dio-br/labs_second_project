<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            "name" => "Historic"

        ]);
        DB::table("categories")->insert([
            "name" => "Artistic"

        ]);
        DB::table("categories")->insert([
            "name" => "Scientific"

        ]);
        DB::table("categories")->insert([
            "name" => "Humanist"

        ]);
        DB::table("categories")->insert([
            "name" => "Sport"

        ]);
        DB::table("categories")->insert([
            "name" => "Fantasy"

        ]);
    }
}
