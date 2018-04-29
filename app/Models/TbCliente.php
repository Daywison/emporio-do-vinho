<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbCliente
 * 
 * @property int $id_cliente
 * @property string $nome_completo
 * @property string $tipo_cliente
 * @property int $cpf
 * @property int $cnpj
 *
 * @package App\Models
 */
class TbCliente extends Eloquent
{
	protected $primaryKey = 'id_cliente';
	public $timestamps = false;

	protected $casts = [
		'cpf' => 'int',
		'cnpj' => 'int'
	];

	protected $fillable = [
		'nome_completo',
		'tipo_cliente',
		'cpf',
		'cnpj'
	];
}
