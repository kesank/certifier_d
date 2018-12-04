<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_login', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('firstname');
            $table->string('nickname');
            $table->string('email');
            $table->string('company')->nullable();
            $table->string('password');
            $table->integer('phone');
            $table->enum('profession', ['notaire', 'agent_immobilier'])->nullable();	
            $table->enum('statut', ['professionel', 'particulier']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_login');
    }
}
