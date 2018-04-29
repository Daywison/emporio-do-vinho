<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbNotaFiscalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_nota_fiscal', function(Blueprint $table)
		{
			$table->integer('id_nota_fiscal', true);
			$table->integer('num_nota_fiscal');
			$table->integer('id_cliente')->index('fk_nota_cliente_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_nota_fiscal');
	}

}
