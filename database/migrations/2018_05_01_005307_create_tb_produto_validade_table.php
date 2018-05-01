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
			$table->integer('id_prod_validade', true);
			$table->integer('id_produto');
			$table->date('data_validade');
			$table->string('lote', 30);
			$table->timestamp('data_entrada')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->index(['id_produto','data_validade','lote'], 'idx_id_produto');
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
