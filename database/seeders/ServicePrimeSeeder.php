<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicePrimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("service_primes")->insert([
            "titre" => "GET IN (THE LAB) AND DISCOVER THE WORLD",
            "boutton" => "BROWSE"
        ]);
    }
}
