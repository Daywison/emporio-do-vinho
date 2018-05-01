<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbProdutoValidade
 * 
 * @property int $id_prod_validade
 * @property int $id_produto
 * @property \Carbon\Carbon $data_validade
 * @property string $lote
 * @property \Carbon\Carbon $data_entrada
 * 
 * @property \App\Models\TbProduto $tb_produto
 *
 * @package App\Models
 */
class TbProdutoValidade extends Eloquent
{
	protected $table = 'tb_produto_validade';
	protected $primaryKey = 'id_prod_validade';
	public $timestamps = false;

	protected $casts = [
		'id_produto' => 'int'
	];

	protected $dates = [
		'data_validade',
		'data_entrada'
	];

	protected $fillable = [
		'id_produto',
		'data_validade',
		'lote',
		'data_entrada'
	];

	public function tb_produto()
	{
		return $this->belongsTo(\App\Models\TbProduto::class, 'id_prod_validade');
	}
}
