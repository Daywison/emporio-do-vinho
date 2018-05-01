<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbPedidoItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_pedido_item', function(Blueprint $table)
		{
			$table->integer('id_pedido');
			$table->integer('id_produto')->index('fk_pedido_produto_item_idx');
			$table->integer('quantidade');
			$table->decimal('valor_unitario', 9);
			$table->decimal('valor_total', 9);
			$table->primary(['id_pedido','id_produto']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_pedido_item');
	}

}
