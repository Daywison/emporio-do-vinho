<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbItensVendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_itens_venda', function(Blueprint $table)
		{
			$table->integer('id_itens_venda', true);
			$table->integer('id_venda')->index('fk_item_venda_idx');
			$table->integer('id_produto')->index('fk_produto_item_idx');
			$table->integer('quantidade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_itens_venda');
	}

}
