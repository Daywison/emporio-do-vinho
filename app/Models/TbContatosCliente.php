<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbContatosCliente
 * 
 * @property int $id_contato
 * @property int $id_cliente
 * @property string $tipo
 * @property string $email
 * @property int $nr_celular
 * @property int $nr_telefone_comercial
 * @property int $Ramal
 * @property int $nr_telefone_residencial
 * 
 * @property \App\Models\TbCliente $tb_cliente
 *
 * @package App\Models
 */
class TbContatosCliente extends Eloquent
{
	protected $primaryKey = 'id_contato';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'nr_celular' => 'int',
		'nr_telefone_comercial' => 'int',
		'Ramal' => 'int',
		'nr_telefone_residencial' => 'int'
	];

	protected $fillable = [
		'id_cliente',
		'tipo',
		'email',
		'nr_celular',
		'nr_telefone_comercial',
		'Ramal',
		'nr_telefone_residencial'
	];

	public function tb_cliente()
	{
		return $this->belongsTo(\App\Models\TbCliente::class, 'id_cliente');
	}
}
