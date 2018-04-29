<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbEstoque
 * 
 * @property int $id_produto
 * @property int $quantidade
 * @property int $estoque_em_transito
 *
 * @package App\Models
 */
class TbEstoque extends Eloquent
{
	protected $table = 'tb_estoque';
	protected $primaryKey = 'id_produto';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_produto' => 'int',
		'quantidade' => 'int',
		'estoque_em_transito' => 'int'
	];

	protected $fillable = [
		'quantidade',
		'estoque_em_transito'
	];
}
