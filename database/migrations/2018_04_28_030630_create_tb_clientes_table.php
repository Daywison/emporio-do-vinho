<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_clientes', function(Blueprint $table)
		{
			$table->integer('id_cliente', true);
			$table->string('nome_completo', 100);
			$table->enum('tipo_cliente', array('Pessoa Fisica','Pessoa Juridica'))->nullable();
			$table->bigInteger('cpf')->nullable();
			$table->bigInteger('cnpj')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_clientes');
	}

}
