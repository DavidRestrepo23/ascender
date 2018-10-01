<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->string('code');
            $table->enum('status',['1','0'])->default('0');
            $table->string('type_property');
            $table->enum('type_bussines', ['Arriendo', 'Venta', 'Alquiler']);
            $table->enum('condition', ['Usado', 'Nuevo', 'Proyecto', 'Construcción', 'Reformado']);
            $table->enum('state', ['Disponible', 'Vendido', 'Alquilado'])->nullable();
            $table->text('price_rent')->nullable();
            $table->text('price_sale')->nullable();
            $table->text('price_admin')->nullable();
            $table->string('year')->nullable()->comment('Año de construcción');
            $table->string('useful_area')->nullable()->comment('Área Útil');
            $table->string('terrain_area')->nullable()->comment('Área terrno');
            $table->integer('bedroom')->nullable()->comment('Alcobas');
            $table->integer('bathrooms')->nullable()->comment('baños');
            $table->integer('floors')->nullable()->comment('Pisos');
            $table->string('garage')->nullable()->comment('Cantidad de autos dentro del garaje');
            $table->string('stratum')->nullable()->comment('estrato');
            $table->text('description')->nullable();
            $table->text('observations')->nullable();
            $table->timestamps();
            
            //Relations with agent
            $table->integer('agent_id')->unsigned()->nullable();
            $table->foreign('agent_id')->references('id')->on('agents')
                  ->onUpdate('cascade');
            
            //Relations with owner
            $table->integer('owner_id')->unsigned()->nullable();
            $table->foreign('owner_id')->references('id')->on('owners')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
