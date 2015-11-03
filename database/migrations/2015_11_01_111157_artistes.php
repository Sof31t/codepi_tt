<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Artistes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistes', function (Blueprint $table) {
            $table->string('nom')->unique();
            $table->text('description');
            $table->string('image', 60)->nullable();
            $table->string('tags', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('artistes');
    }
}
