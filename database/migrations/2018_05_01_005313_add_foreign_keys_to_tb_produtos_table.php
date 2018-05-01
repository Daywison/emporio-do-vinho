<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_produtos', function(Blueprint $table)
		{
			$table->foreign('id_categoria', 'fk_categoria')->references('id_categoria')->on('tb_categorias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_fornecedor', 'fk_fornecedores')->references('id_fornecedor')->on('tb_fornecedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_marca', 'fk_marca')->references('id_marca')->on('tb_marcas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_produtos', function(Blueprint $table)
		{
			$table->dropForeign('fk_categoria');
			$table->dropForeign('fk_fornecedores');
			$table->dropForeign('fk_marca');
		});
	}

}
