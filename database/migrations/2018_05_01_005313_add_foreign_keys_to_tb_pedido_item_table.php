<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbPedidoItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_pedido_item', function(Blueprint $table)
		{
			$table->foreign('id_pedido', 'fk_pedido_pedido_item')->references('id_pedido')->on('tb_pedidos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_produto', 'fk_pedido_produto_item')->references('id_produto')->on('tb_produtos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_pedido_item', function(Blueprint $table)
		{
			$table->dropForeign('fk_pedido_pedido_item');
			$table->dropForeign('fk_pedido_produto_item');
		});
	}

}
