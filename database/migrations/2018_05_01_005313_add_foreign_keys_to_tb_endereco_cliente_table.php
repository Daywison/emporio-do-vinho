<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbEnderecoClienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_endereco_cliente', function(Blueprint $table)
		{
			$table->foreign('id_cliente', 'fk_end_cliente')->references('id_cliente')->on('tb_clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_endereco_cliente', function(Blueprint $table)
		{
			$table->dropForeign('fk_end_cliente');
		});
	}

}
