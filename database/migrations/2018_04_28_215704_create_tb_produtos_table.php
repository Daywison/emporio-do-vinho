<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_produtos', function(Blueprint $table)
		{
			$table->integer('id_produto', true);
			$table->integer('id_fornecedor')->index('fk_fornecedores_idx');
			$table->integer('id_marca')->index('fk_marca_idx');
			$table->integer('id_categoria')->index('fk_categoria_idx');
			$table->string('descricao', 45);
			$table->string('cod_barras', 45);
			$table->date('data_cadastro');
			$table->decimal('valor_custo', 9);
			$table->decimal('valor_venda', 9);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_produtos');
	}

}
