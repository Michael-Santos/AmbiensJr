<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventosUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('usuario_id');
            $table->unsignedInteger('evento_id');
            $table->boolean('presenca')->default(false);
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onupdate('cascade');
            $table->foreign('evento_id')->references('id')->on('eventos')->onupdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos_usuarios');
    }
}
