<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbVenda
 * 
 * @property int $id_venda
 * @property \Carbon\Carbon $data
 * @property float $valor
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tb_itens_vendas
 *
 * @package App\Models
 */
class TbVenda extends Eloquent
{
	protected $primaryKey = 'id_venda';
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float'
	];

	protected $dates = [
		'data'
	];

	protected $fillable = [
		'data',
		'valor'
	];

	public function tb_itens_vendas()
	{
		return $this->hasMany(\App\Models\TbItensVenda::class, 'id_venda');
	}
}
