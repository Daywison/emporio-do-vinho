<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbEnderecoFornecedor
 * 
 * @property int $id_endereco
 * @property string $rua
 * @property string $estado
 * @property string $cidade
 * @property string $bairro
 * @property string $numero
 * @property string $cep
 * @property string $logradouro
 * @property int $id_fornecedor
 *
 * @package App\Models
 */
class TbEnderecoFornecedor extends Eloquent
{
	protected $table = 'tb_endereco_fornecedor';
	protected $primaryKey = 'id_endereco';
	public $timestamps = false;

	protected $casts = [
		'id_fornecedor' => 'int'
	];

	protected $fillable = [
		'rua',
		'estado',
		'cidade',
		'bairro',
		'numero',
		'cep',
		'logradouro',
		'id_fornecedor'
	];
}
