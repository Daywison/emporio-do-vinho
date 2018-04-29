<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbFornecedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_fornecedores', function(Blueprint $table)
		{
			$table->integer('id_fornecedor', true);
			$table->string('nome', 45);
			$table->bigInteger('cnpj');
			$table->string('inscricao_estadual', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_fornecedores');
	}

}
