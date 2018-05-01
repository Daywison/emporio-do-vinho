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
			$table->string('email', 50)->unique('idx_email');
			$table->string('senha', 32);
			$table->enum('tipo_usuario', array('ADMINISTRADOR','ATENDENTE'));
			$table->enum('status', array('ATIVO', 'INATIVO'));
			$table->timestamp('data_cadastro')->default(DB::raw('CURRENT_TIMESTAMP'));
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
