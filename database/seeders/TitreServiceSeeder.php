<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titre_services")->insert([
            "titre" => "GET IN THE (LAB) AND SEE THE SERVICES",
            "boutton" => "BROWSE"

        ]);
    }
}
