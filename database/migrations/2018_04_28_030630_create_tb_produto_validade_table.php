<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbProdutoValidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_produto_validade', function(Blueprint $table)
		{
			$table->integer('id_produto')->index('fk_produto_idx');
			$table->date('data_validade')->nullable();
			$table->string('lote', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_produto_validade');
	}

}
