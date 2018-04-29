<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbPedidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_pedidos', function(Blueprint $table)
		{
			$table->integer('id_pedido', true);
			$table->integer('id_fornecedor')->index('fk_fornecedor_idx');
			$table->integer('id_usuario')->index('fk_usuario_idx');
			$table->date('data_emissao');
			$table->enum('situacao', array('ATENDIDO','ABERTO','CANCELADO'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_pedidos');
	}

}
