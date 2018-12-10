<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessosSeletivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos_seletivos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('estado')->default(false);
            $table->text('descricao')->nullable();
            $table->boolean('usa_descricao')->default(false);
            $table->date('data_final')->nullable();
            $table->time('hora_final')->nullable();
            $table->string('url_pdf')->nullable();
            $table->boolean('usa_pdf')->default(false);
            $table->string('link_driver')->nullable();
            $table->boolean('usa_link_driver')->default(false);
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
        Schema::dropIfExists('processos_seletivos');
    }
}
