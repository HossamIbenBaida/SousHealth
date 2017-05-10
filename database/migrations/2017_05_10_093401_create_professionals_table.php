<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamps();
        });
        Schema::table('professionals', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index();

            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('spescality')->unsigned()->index();

            $table->foreign('spescality')->references('id')->on('Specialities');


            $table->integer('contact')->unsigned()->index();

            $table->foreign('contact')->references('id')->on('contactts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionals');
    }
}
