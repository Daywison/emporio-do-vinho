<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbPedidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_pedidos', function(Blueprint $table)
		{
			$table->foreign('id_fornecedor', 'fk_id_fornecedor')->references('id_fornecedor')->on('tb_fornecedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_usuario', 'fk_id_usuario')->references('id_usuario')->on('tb_usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_pedidos', function(Blueprint $table)
		{
			$table->dropForeign('fk_id_fornecedor');
			$table->dropForeign('fk_id_usuario');
		});
	}

}
