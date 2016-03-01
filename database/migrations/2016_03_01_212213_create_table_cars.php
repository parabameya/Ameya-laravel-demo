<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cars', function (Blueprint $table) {
            $table->increments('carID');
            $table->string('name');
            $table->string('vin');
            $table->string('make');
            $table->string('model');
            $table->string('color');
            $table->string('user_id',22)->foreign('user_id')->references('userID')->on('users');
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
        Schema::drop('cars');
    }
}
