<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            "name" => "administrateur"

        ]);
        DB::table("roles")->insert([
            "name" => "webmasteur"

        ]);
        DB::table("roles")->insert([
            "name" => "redacteur"

        ]);
        DB::table("roles")->insert([
            "name" => "membre"

        ]);
    }
}
