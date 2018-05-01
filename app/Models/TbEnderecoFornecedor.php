<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbEnderecoFornecedor
 * 
 * @property int $id_endereco
 * @property int $id_fornecedor
 * @property string $rua
 * @property int $numero
 * @property string $complemento
 * @property string $cep
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $pais
 * 
 * @property \App\Models\TbFornecedore $tb_fornecedore
 *
 * @package App\Models
 */
class TbEnderecoFornecedor extends Eloquent
{
	protected $table = 'tb_endereco_fornecedor';
	protected $primaryKey = 'id_endereco';
	public $timestamps = false;

	protected $casts = [
		'id_fornecedor' => 'int',
		'numero' => 'int'
	];

	protected $fillable = [
		'id_fornecedor',
		'rua',
		'numero',
		'complemento',
		'cep',
		'bairro',
		'cidade',
		'estado',
		'pais'
	];

	public function tb_fornecedore()
	{
		return $this->belongsTo(\App\Models\TbFornecedore::class, 'id_fornecedor');
	}
}
