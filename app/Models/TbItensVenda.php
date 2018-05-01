<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbItensVenda
 * 
 * @property int $id_itens_venda
 * @property int $id_venda
 * @property int $id_produto
 * @property int $quantidade
 * 
 * @property \App\Models\TbVenda $tb_venda
 * @property \App\Models\TbProduto $tb_produto
 *
 * @package App\Models
 */
class TbItensVenda extends Eloquent
{
	protected $table = 'tb_itens_venda';
	protected $primaryKey = 'id_itens_venda';
	public $timestamps = false;

	protected $casts = [
		'id_venda' => 'int',
		'id_produto' => 'int',
		'quantidade' => 'int'
	];

	protected $fillable = [
		'id_venda',
		'id_produto',
		'quantidade'
	];

	public function tb_venda()
	{
		return $this->belongsTo(\App\Models\TbVenda::class, 'id_venda');
	}

	public function tb_produto()
	{
		return $this->belongsTo(\App\Models\TbProduto::class, 'id_produto');
	}
}
