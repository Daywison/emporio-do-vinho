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
			$table->integer('id_fornecedor')->index('fk_end_fornecedor_idx');
			$table->string('rua', 50);
			$table->integer('numero');
			$table->string('complemento', 30)->nullable();
			$table->string('cep', 7)->index('idx_cep');
			$table->string('bairro', 30);
			$table->string('cidade', 30);
			$table->string('estado', 20);
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
		Schema::drop('tb_endereco_fornecedor');
	}

}
