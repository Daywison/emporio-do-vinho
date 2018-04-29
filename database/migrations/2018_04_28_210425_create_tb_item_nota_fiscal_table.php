<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbItemNotaFiscalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_item_nota_fiscal', function(Blueprint $table)
		{
			$table->integer('id_nota_fiscal');
			$table->integer('id_produto')->index('fk_produto_idx');
			$table->integer('quantidade');
			$table->decimal('valor_unitario', 9);
			$table->decimal('valor_total', 9);
			$table->primary(['id_nota_fiscal','id_produto']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_item_nota_fiscal');
	}

}
