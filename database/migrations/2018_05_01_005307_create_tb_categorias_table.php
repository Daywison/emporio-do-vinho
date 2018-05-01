<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbCategoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_categorias', function(Blueprint $table)
		{
			$table->integer('id_categoria', true);
			$table->string('categoria', 30);
			$table->boolean('status');
			$table->timestamp('dt_cadastro')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->index(['id_categoria','status'], 'idx_id_categoria');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_categorias');
	}

}
