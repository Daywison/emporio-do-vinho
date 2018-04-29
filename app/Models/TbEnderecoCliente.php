<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbEnderecoCliente
 * 
 * @property int $id_endereco
 * @property string $rua
 * @property string $estado
 * @property string $cidade
 * @property string $bairro
 * @property string $numero
 * @property string $cep
 * @property string $logradouro
 * @property int $id_cliente
 *
 * @package App\Models
 */
class TbEnderecoCliente extends Eloquent
{
	protected $table = 'tb_endereco_cliente';
	protected $primaryKey = 'id_endereco';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int'
	];

	protected $fillable = [
		'rua',
		'estado',
		'cidade',
		'bairro',
		'numero',
		'cep',
		'logradouro',
		'id_cliente'
	];
}
