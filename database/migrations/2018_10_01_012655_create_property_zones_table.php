<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_zones', function (Blueprint $table) {
            $table->increments('id');
            $table->text('country')->nullable();
            $table->text('departament')->nullable();
            $table->text('municipaly')->nullable();
            $table->text('neighborhood')->nullable();
            $table->text('address')->nullable();
            $table->text('postcode')->nullable()->comment('Codigo postal');
            $table->timestamps();

            //Relation with property

            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_zones');
    }
}
