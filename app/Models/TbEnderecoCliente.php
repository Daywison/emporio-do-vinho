<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbEnderecoCliente
 * 
 * @property int $id_endereco
 * @property int $id_cliente
 * @property string $rua
 * @property int $numero
 * @property string $complemento
 * @property string $cep
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $pais
 * 
 * @property \App\Models\TbCliente $tb_cliente
 *
 * @package App\Models
 */
class TbEnderecoCliente extends Eloquent
{
	protected $table = 'tb_endereco_cliente';
	protected $primaryKey = 'id_endereco';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'numero' => 'int'
	];

	protected $fillable = [
		'id_cliente',
		'rua',
		'numero',
		'complemento',
		'cep',
		'bairro',
		'cidade',
		'estado',
		'pais'
	];

	public function tb_cliente()
	{
		return $this->belongsTo(\App\Models\TbCliente::class, 'id_cliente');
	}
}
