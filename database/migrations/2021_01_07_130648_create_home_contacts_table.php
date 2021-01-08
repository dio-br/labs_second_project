<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_contacts', function (Blueprint $table) {
            $table->id();
            $table->string("titre1");
            $table->text("texte");
            $table->string("titre2");
            $table->string("info1");
            $table->string("info2");
            $table->string("info3");
            $table->string("info4");
            $table->string("boutton");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_contacts');
    }
}
