<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbEnderecoFornecedorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_endereco_fornecedor', function(Blueprint $table)
		{
			$table->integer('id_endereco', true);
			$table->string('rua', 45);
			$table->string('estado', 45);
			$table->string('cidade', 45);
			$table->string('bairro', 45);
			$table->string('numero', 45);
			$table->string('cep', 7);
			$table->string('logradouro', 45)->nullable();
			$table->integer('id_fornecedor')->index('fk_end_fornecedor_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_endereco_fornecedor');
	}

}
