<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titre_teams")->insert([
            "titre" => "GET IN THE (LAB AND MEET) THE TEAM"

        ]);
    }
}
