<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_orcamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('orcamento_id')->unsigned();
            $table->bigInteger('produto_id')->unsigned();
            $table->double('amount');
            $table->double('value');
            $table->unique('produto_id');
            $table->foreign('orcamento_id')->references('id')->on('orcamentos');
            $table->foreign('produto_id')->references('id')->on('produtos');
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
        Schema::dropIfExists('produto_orcamentos');
    }
}
