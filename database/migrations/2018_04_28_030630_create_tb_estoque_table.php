<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbEstoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_estoque', function(Blueprint $table)
		{
			$table->integer('id_produto')->primary();
			$table->integer('quantidade')->default(0);
			$table->integer('estoque_em_transito')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_estoque');
	}

}
