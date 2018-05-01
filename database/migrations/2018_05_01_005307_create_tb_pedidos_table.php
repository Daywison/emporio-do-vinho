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
			$table->integer('id_pedido')->primary();
			$table->integer('id_fornecedor')->index('fk_id_fornecedor');
			$table->integer('id_usuario')->index('fk_id_usuario');
			$table->date('data_emissao');
			$table->float('valor_total', 9)->nullable();
			$table->enum('situacao', array('FECHADO','ENTREGUE','EMITIDO','ABERTO','CANCELADO'));
			$table->string('prazo_pagamento', 20)->nullable();
			$table->enum('tp_pagamento', array('PARCELADO 5X','PARCELADO 4X','PARCELADO 3X','PARCELADO 2X','A VISTA','BOLETO'))->nullable();
			$table->timestamp('dt_cadastro')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
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
