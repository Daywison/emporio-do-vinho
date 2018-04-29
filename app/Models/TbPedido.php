<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
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
 * @property string $situacao
 *
 * @package App\Models
 */
class TbPedido extends Eloquent
{
	protected $primaryKey = 'id_pedido';
	public $timestamps = false;

	protected $casts = [
		'id_fornecedor' => 'int',
		'id_usuario' => 'int'
	];

	protected $dates = [
		'data_emissao'
	];

	protected $fillable = [
		'id_fornecedor',
		'id_usuario',
		'data_emissao',
		'situacao'
	];
}
