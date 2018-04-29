<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbNotaFiscal
 * 
 * @property int $id_nota_fiscal
 * @property int $num_nota_fiscal
 * @property int $id_cliente
 *
 * @package App\Models
 */
class TbNotaFiscal extends Eloquent
{
	protected $table = 'tb_nota_fiscal';
	protected $primaryKey = 'id_nota_fiscal';
	public $timestamps = false;

	protected $casts = [
		'num_nota_fiscal' => 'int',
		'id_cliente' => 'int'
	];

	protected $fillable = [
		'num_nota_fiscal',
		'id_cliente'
	];
}
