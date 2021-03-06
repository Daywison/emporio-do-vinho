<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbLogMovimentacaoEstoque
 * 
 * @property int $id_produto
 * @property int $quantidade
 * @property \Carbon\Carbon $data_entrada
 * @property \Carbon\Carbon $data_saida
 * @property string $tipo_movimentacao
 * 
 * @property \App\Models\TbProduto $tb_produto
 *
 * @package App\Models
 */
class TbLogMovimentacaoEstoque extends Eloquent
{
	protected $table = 'tb_log_movimentacao_estoque';
	protected $primaryKey = 'id_produto';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_produto' => 'int',
		'quantidade' => 'int'
	];

	protected $dates = [
		'data_entrada',
		'data_saida'
	];

	protected $fillable = [
		'quantidade',
		'data_entrada',
		'data_saida',
		'tipo_movimentacao'
	];

	public function tb_produto()
	{
		return $this->belongsTo(\App\Models\TbProduto::class, 'id_produto');
	}
}
