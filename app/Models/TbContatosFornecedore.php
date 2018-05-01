<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbContatosFornecedore
 * 
 * @property int $id_contato
 * @property int $id_fornecedor
 * @property string $tipo
 * @property int $numero
 * @property string $email
 * 
 * @property \App\Models\TbFornecedore $tb_fornecedore
 *
 * @package App\Models
 */
class TbContatosFornecedore extends Eloquent
{
	protected $primaryKey = 'id_contato';
	public $timestamps = false;

	protected $casts = [
		'id_fornecedor' => 'int',
		'numero' => 'int'
	];

	protected $fillable = [
		'id_fornecedor',
		'tipo',
		'numero',
		'email'
	];

	public function tb_fornecedore()
	{
		return $this->belongsTo(\App\Models\TbFornecedore::class, 'id_fornecedor');
	}
}
