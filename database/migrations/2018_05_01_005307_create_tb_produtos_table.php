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
			$table->string('descricao', 50);
			$table->integer('cod_barras')->nullable();
			$table->decimal('valor_custo', 9);
			$table->decimal('valor_venda', 9);
			$table->integer('icms')->nullable();
			$table->integer('ipi')->nullable();
			$table->integer('pis')->nullable();
			$table->integer('cofins')->nullable();
			$table->integer('iva')->nullable();
			$table->decimal('margem_lucro', 5)->nullable();
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
		Schema::drop('tb_produtos');
	}

}
