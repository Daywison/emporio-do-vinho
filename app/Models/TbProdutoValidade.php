<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbProdutoValidade
 * 
 * @property int $id_produto
 * @property \Carbon\Carbon $data_validade
 * @property string $lote
 *
 * @package App\Models
 */
class TbProdutoValidade extends Eloquent
{
	protected $table = 'tb_produto_validade';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_produto' => 'int'
	];

	protected $dates = [
		'data_validade'
	];

	protected $fillable = [
		'id_produto',
		'data_validade',
		'lote'
	];
}
