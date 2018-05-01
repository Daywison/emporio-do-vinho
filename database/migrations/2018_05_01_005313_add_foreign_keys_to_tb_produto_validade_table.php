<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbProdutoValidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_produto_validade', function(Blueprint $table)
		{
			$table->foreign('id_prod_validade', 'fk_id_produto')->references('id_produto')->on('tb_produtos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_produto_validade', function(Blueprint $table)
		{
			$table->dropForeign('fk_id_produto');
		});
	}

}
