<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('firstp')->nullable();
            $table->text('secondp')->nullable();
            $table->text('thirdp')->nullable();
            $table->text('fourthp')->nullable();
            $table->text('fifthp')->nullable();
            $table->text('sixthp')->nullable();
            $table->text('seventhp')->nullable();
            $table->text('eigthp')->nullable();
            $table->text('ninthp')->nullable();
            $table->text('tenthp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
