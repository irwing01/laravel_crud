<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarProjetoTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->nullable();
            $table->string('endereco', 255)->nullable();
            $table->string('telefone', 11)->nullable();
            $table->decimal('moeda',20)->nullable()->default(0.00);
            //$table->date('criado_em')->useCurrent();
            //$table->date('atualizado_em')->nullable();
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
        Schema::dropIfExists('projetos');
    }
}
