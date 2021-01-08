<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("home_contacts")->insert([
            "titre1" => "CONTACT US",
            "texte" => "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
            "titre2" => "Main Office",
            "info1" => "C/ Libertad, 34",
            "info2" => "05200 Arévalo",
            "info3" => "0034 37483 2445 322",
            "info4" => "hello@company.com",
            "boutton" => "SEND"
        ]);
    }
}
