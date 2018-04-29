<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbLogMovimentacaoEstoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_log_movimentacao_estoque', function(Blueprint $table)
		{
			$table->integer('id_produto')->primary();
			$table->integer('quantidade');
			$table->date('data_entrada');
			$table->date('data_saida');
			$table->enum('tipo_movimentacao', array('ENTRADA','SAIDA','FURTO','QUEBRA'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_log_movimentacao_estoque');
	}

}
