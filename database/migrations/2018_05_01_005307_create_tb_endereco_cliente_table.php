<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbEnderecoClienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_endereco_cliente', function(Blueprint $table)
		{
			$table->integer('id_endereco', true);
			$table->integer('id_cliente')->index('fk_end_cliente_idx');
			$table->string('rua', 45);
			$table->integer('numero');
			$table->string('complemento', 20)->nullable();
			$table->string('cep', 9)->index('idx_cep');
			$table->string('bairro', 30);
			$table->string('cidade', 30);
			$table->string('estado', 30);
			$table->string('pais', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_endereco_cliente');
	}

}
