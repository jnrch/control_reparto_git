<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //Up crea la table
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_user');
            $table->string('name_largo');
            $table->password('pass');
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
      //Down elimina la table
        Schema::dropIfExists('usuarios');
    }
}
