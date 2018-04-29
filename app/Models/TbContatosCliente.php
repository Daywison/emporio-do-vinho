<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbContatosCliente
 * 
 * @property int $id_contato
 * @property int $id_cliente
 * @property string $tipo
 * @property int $numero
 * @property string $email
 *
 * @package App\Models
 */
class TbContatosCliente extends Eloquent
{
	protected $primaryKey = 'id_contato';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'numero' => 'int'
	];

	protected $fillable = [
		'id_cliente',
		'tipo',
		'numero',
		'email'
	];
}
