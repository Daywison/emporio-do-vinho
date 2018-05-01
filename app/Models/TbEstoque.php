<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
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
 * @property \App\Models\TbProduto $tb_produto
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

	public function tb_produto()
	{
		return $this->belongsTo(\App\Models\TbProduto::class, 'id_produto');
	}
}
