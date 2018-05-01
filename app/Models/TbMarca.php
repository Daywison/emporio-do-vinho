<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbMarca
 * 
 * @property int $id_marca
 * @property string $marca
 * @property int $status
 * @property \Carbon\Carbon $dt_cadastro
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tb_produtos
 *
 * @package App\Models
 */
class TbMarca extends Eloquent
{
	protected $primaryKey = 'id_marca';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $dates = [
		'dt_cadastro'
	];

	protected $fillable = [
		'marca',
		'status',
		'dt_cadastro'
	];

	public function tb_produtos()
	{
		return $this->hasMany(\App\Models\TbProduto::class, 'id_marca');
	}
}
