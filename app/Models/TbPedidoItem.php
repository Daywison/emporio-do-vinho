<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbPedidoItem
 * 
 * @property int $id_pedido
 * @property int $id_produto
 * @property int $quantidade
 * @property float $valor_unitario
 * @property float $valor_total
 *
 * @package App\Models
 */
class TbPedidoItem extends Eloquent
{
	protected $table = 'tb_pedido_item';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_pedido' => 'int',
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
