<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->text('descricao');
            $table->date('data_evento');
            $table->time('hora_evento');
            $table->boolean('inscricao')->default(false);
            $table->integer('numero_vagas')->default(0);
            $table->boolean('pagamento')->default(false);
            $table->string('url_imagem')->nullable();


            $table->date('data_inicio_inscricao')->nullable();
            $table->time('hora_inicio_inscricao')->nullable();
            $table->date('data_fim_inscricao')->nullable();
            $table->time('hora_fim_inscricao')->nullable();
            $table->integer('inscritos')->default(0);

            $table->boolean('pagamento_na_hora')->default(false);
            $table->boolean('pagamento_antecipado')->default(false);
            $table->integer('valor')->nullable();

            $table->boolean('finalizado')->default(0);

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
        Schema::dropIfExists('eventos');
    }
}
