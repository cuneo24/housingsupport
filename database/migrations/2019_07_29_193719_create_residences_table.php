<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('name');
            $table->string('picture_url');
            $table->text('program');
            $table->string('provider');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->string('year_acquired');
            $table->string('year_built');
            $table->string('units');
            $table->decimal('land_area','5','3');
            $table->string('living_area');
            $table->string('zoning');
            $table->string('other');
            $table->string('book');
            $table->string('page');
            $table->string('map_parcel');
            $table->boolean('hidden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residences');
    }
}
