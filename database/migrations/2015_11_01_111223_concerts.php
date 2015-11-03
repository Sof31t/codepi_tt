<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Concerts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerts', function(Blueprint $table) {
            $table->string('artiste');
            $table->string('lieu');
            $table->string('adresse');
            $table->string('ville');
            $table->dateTime('date')->format('Y-m-d H:i:s');
            $table->float('prix', 4, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('concerts');
    }
}
