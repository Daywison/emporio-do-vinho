<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbFornecedore
 * 
 * @property int $id_fornecedor
 * @property string $nome
 * @property int $cnpj
 * @property string $inscricao_estadual
 *
 * @package App\Models
 */
class TbFornecedore extends Eloquent
{
	protected $primaryKey = 'id_fornecedor';
	public $timestamps = false;

	protected $casts = [
		'cnpj' => 'int'
	];

	protected $fillable = [
		'nome',
		'cnpj',
		'inscricao_estadual'
	];
}
