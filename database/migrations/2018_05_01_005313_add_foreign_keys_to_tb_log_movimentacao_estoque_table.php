<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbLogMovimentacaoEstoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_log_movimentacao_estoque', function(Blueprint $table)
		{
			$table->foreign('id_produto', 'fk_produto_movimentado')->references('id_produto')->on('tb_produtos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_log_movimentacao_estoque', function(Blueprint $table)
		{
			$table->dropForeign('fk_produto_movimentado');
		});
	}

}
