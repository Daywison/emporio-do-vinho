<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbItensVendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_itens_venda', function(Blueprint $table)
		{
			$table->foreign('id_venda', 'fk_item_venda')->references('id_venda')->on('tb_vendas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_produto', 'fk_produto_item')->references('id_produto')->on('tb_produtos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_itens_venda', function(Blueprint $table)
		{
			$table->dropForeign('fk_item_venda');
			$table->dropForeign('fk_produto_item');
		});
	}

}
