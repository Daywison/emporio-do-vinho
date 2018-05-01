<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
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
 * @property \App\Models\TbPedido $tb_pedido
 * @property \App\Models\TbProduto $tb_produto
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

	public function tb_pedido()
	{
		return $this->belongsTo(\App\Models\TbPedido::class, 'id_pedido');
	}

	public function tb_produto()
	{
		return $this->belongsTo(\App\Models\TbProduto::class, 'id_produto');
	}
}
