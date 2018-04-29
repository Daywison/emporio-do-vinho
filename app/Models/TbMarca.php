<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbMarca
 * 
 * @property int $id_marca
 * @property string $marca
 * @property bool $status
 *
 * @package App\Models
 */
class TbMarca extends Eloquent
{
	protected $primaryKey = 'id_marca';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool'
	];

	protected $fillable = [
		'marca',
		'status'
	];
}
