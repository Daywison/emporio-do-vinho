<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbContatosFornecedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_contatos_fornecedores', function(Blueprint $table)
		{
			$table->foreign('id_fornecedor', 'fk_fornecedor')->references('id_fornecedor')->on('tb_fornecedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_contatos_fornecedores', function(Blueprint $table)
		{
			$table->dropForeign('fk_fornecedor');
		});
	}

}
