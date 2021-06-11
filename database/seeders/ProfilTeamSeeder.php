<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("profil_teams")->insert([
        [
            "image" => "ceo.jpg",
            "prenom" => "leo makaski",
            "fonction" => 'CEO COMPANY',
        ],
        [ 
            "image" => "women.jpg",
            "prenom" => "Christine Williams",
            "fonction" => 'Project Manager',
        ],
        [
            "image" => "webmaster1.jpg",
            "prenom" => "young fuji",
            "fonction" => 'Digital Designer',
        ],
        ]);
    }
}
