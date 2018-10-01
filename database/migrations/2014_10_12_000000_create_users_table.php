<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->text('numberId')->comment('cedula');
            $table->string('name');
            $table->string('lastname', 128);
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthdate')->nullable();
            $table->text('telephone')->nullable();
            $table->text('mobile')->nullable();
            $table->text('country')->nullable();
            $table->text('departament')->nullable();
            $table->text('city')->nullable();
            $table->text('address')->nullable();
            $table->enum('state',['active','desactive'])->default('active');
            $table->timestamp('email_verified_at')->nullable();    
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
