<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbContatosClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_contatos_clientes', function(Blueprint $table)
		{
			$table->foreign('id_cliente', 'fk_cliente')->references('id_cliente')->on('tb_clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_contatos_clientes', function(Blueprint $table)
		{
			$table->dropForeign('fk_cliente');
		});
	}

}
