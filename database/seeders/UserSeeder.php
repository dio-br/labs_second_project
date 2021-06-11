<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "name" => "ADMIN",
                "email" => "admin@labs.com",
                "password" => Hash::make("testtest"),
                "role_id" => 1,
                "photo" => "admin.png",
                "created_at" => now()
            ],
            [
                "name" => "webmaster",
                "email" => "webmaster@labs.com",
                "password" => Hash::make("testtest"),
                "role_id" => 1,
                "photo" => "webmaster.jpg",
                "created_at" => now()
            ],
            [
                "name" => "redacteur",
                "email" => "redacteur@labs.com",
                "password" => Hash::make("testtest"),
                "role_id" => 1,
                "photo" => "redacteur.png",
                "created_at" => now()
            ],
        ]);
    }
}
