<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbPedido
 * 
 * @property int $id_pedido
 * @property int $id_fornecedor
 * @property int $id_usuario
 * @property \Carbon\Carbon $data_emissao
 * @property float $valor_total
 * @property string $situacao
 * @property string $prazo_pagamento
 * @property string $tp_pagamento
 * @property \Carbon\Carbon $dt_cadastro
 * 
 * @property \App\Models\TbFornecedore $tb_fornecedore
 * @property \App\Models\TbUsuario $tb_usuario
 * @property \Illuminate\Database\Eloquent\Collection $tb_pedido_items
 *
 * @package App\Models
 */
class TbPedido extends Eloquent
{
	protected $primaryKey = 'id_pedido';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_pedido' => 'int',
		'id_fornecedor' => 'int',
		'id_usuario' => 'int',
		'valor_total' => 'float'
	];

	protected $dates = [
		'data_emissao',
		'dt_cadastro'
	];

	protected $fillable = [
		'id_fornecedor',
		'id_usuario',
		'data_emissao',
		'valor_total',
		'situacao',
		'prazo_pagamento',
		'tp_pagamento',
		'dt_cadastro'
	];

	public function tb_fornecedore()
	{
		return $this->belongsTo(\App\Models\TbFornecedore::class, 'id_fornecedor');
	}

	public function tb_usuario()
	{
		return $this->belongsTo(\App\Models\TbUsuario::class, 'id_usuario');
	}

	public function tb_pedido_items()
	{
		return $this->hasMany(\App\Models\TbPedidoItem::class, 'id_pedido');
	}
}
