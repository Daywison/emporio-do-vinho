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
			$table->string('razao_social', 45);
			$table->string('nome_fantasia', 45)->nullable();
			$table->bigInteger('cnpj')->unique('idx_cnpj');
			$table->string('inscricao_estadual', 14);
			$table->string('inscricao_municipal', 14)->nullable();
			$table->string('ramo_atividade', 45)->nullable();
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
