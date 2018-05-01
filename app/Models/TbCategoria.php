<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbCategoria
 * 
 * @property int $id_categoria
 * @property string $categoria
 * @property bool $status
 * @property \Carbon\Carbon $dt_cadastro
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tb_produtos
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

	protected $dates = [
		'dt_cadastro'
	];

	protected $fillable = [
		'categoria',
		'status',
		'dt_cadastro'
	];

	public function tb_produtos()
	{
		return $this->hasMany(\App\Models\TbProduto::class, 'id_categoria');
	}
}
