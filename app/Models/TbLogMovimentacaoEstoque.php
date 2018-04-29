<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:57:22 +0000.
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
}
