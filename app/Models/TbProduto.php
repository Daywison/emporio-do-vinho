<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbProduto
 * 
 * @property int $id_produto
 * @property int $id_fornecedor
 * @property int $id_marca
 * @property int $id_categoria
 * @property string $descricao
 * @property string $cod_barras
 * @property \Carbon\Carbon $data_cadastro
 * @property float $valor_custo
 * @property float $valor_venda
 *
 * @package App\Models
 */
class TbProduto extends Eloquent
{
	protected $primaryKey = 'id_produto';
	public $timestamps = false;

	protected $casts = [
		'id_fornecedor' => 'int',
		'id_marca' => 'int',
		'id_categoria' => 'int',
		'valor_custo' => 'float',
		'valor_venda' => 'float'
	];

	protected $dates = [
		'data_cadastro'
	];

	protected $fillable = [
		'id_fornecedor',
		'id_marca',
		'id_categoria',
		'descricao',
		'cod_barras',
		'data_cadastro',
		'valor_custo',
		'valor_venda'
	];
}
