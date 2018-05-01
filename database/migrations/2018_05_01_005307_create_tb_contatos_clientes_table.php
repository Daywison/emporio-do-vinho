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
			$table->enum('tipo', array('Recado','Secundário','Principal'));
			$table->string('email', 45)->index('idx_email');
			$table->integer('nr_celular')->nullable();
			$table->integer('nr_telefone_comercial')->nullable();
			$table->integer('Ramal')->nullable();
			$table->integer('nr_telefone_residencial')->nullable();
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
