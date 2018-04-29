<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_usuario', function(Blueprint $table)
		{
			$table->integer('id_usuario', true);
			$table->string('nome', 45);
			$table->string('email');
			$table->string('senha', 100);
			$table->date('data_cadastro');
			$table->boolean('status');
			$table->enum('tipo', array('ADMINISTRADOR','ATENDENTE'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_usuario');
	}

}
