<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbContatosClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_contatos_clientes', function(Blueprint $table)
		{
			$table->integer('id_contato', true);
			$table->integer('id_cliente')->index('fk_cliente_idx');
			$table->string('tipo', 45);
			$table->integer('numero');
			$table->string('email', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_contatos_clientes');
	}

}
