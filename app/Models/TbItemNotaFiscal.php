<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbItemNotaFiscal
 * 
 * @property int $id_nota_fiscal
 * @property int $id_produto
 * @property int $quantidade
 * @property float $valor_unitario
 * @property float $valor_total
 *
 * @package App\Models
 */
class TbItemNotaFiscal extends Eloquent
{
	protected $table = 'tb_item_nota_fiscal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_nota_fiscal' => 'int',
		'id_produto' => 'int',
		'quantidade' => 'int',
		'valor_unitario' => 'float',
		'valor_total' => 'float'
	];

	protected $fillable = [
		'quantidade',
		'valor_unitario',
		'valor_total'
	];
}
