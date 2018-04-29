<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbCategoria
 * 
 * @property int $id_categoria
 * @property string $categoria
 * @property bool $status
 *
 * @package App\Models
 */
class TbCategoria extends Eloquent
{
	protected $primaryKey = 'id_categoria';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool'
	];

	protected $fillable = [
		'categoria',
		'status'
	];
}
