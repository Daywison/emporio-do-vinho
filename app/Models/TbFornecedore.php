<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbFornecedore
 * 
 * @property int $id_fornecedor
 * @property string $razao_social
 * @property string $nome_fantasia
 * @property int $cnpj
 * @property string $inscricao_estadual
 * @property string $inscricao_municipal
 * @property string $ramo_atividade
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tb_contatos_fornecedores
 * @property \Illuminate\Database\Eloquent\Collection $tb_endereco_fornecedors
 * @property \Illuminate\Database\Eloquent\Collection $tb_pedidos
 * @property \Illuminate\Database\Eloquent\Collection $tb_produtos
 *
 * @package App\Models
 */
class TbFornecedore extends Eloquent
{
	protected $primaryKey = 'id_fornecedor';
	public $timestamps = false;

	protected $casts = [
		'cnpj' => 'int'
	];

	protected $fillable = [
		'razao_social',
		'nome_fantasia',
		'cnpj',
		'inscricao_estadual',
		'inscricao_municipal',
		'ramo_atividade'
	];

	public function tb_contatos_fornecedores()
	{
		return $this->hasMany(\App\Models\TbContatosFornecedore::class, 'id_fornecedor');
	}

	public function tb_endereco_fornecedors()
	{
		return $this->hasMany(\App\Models\TbEnderecoFornecedor::class, 'id_fornecedor');
	}

	public function tb_pedidos()
	{
		return $this->hasMany(\App\Models\TbPedido::class, 'id_fornecedor');
	}

	public function tb_produtos()
	{
		return $this->hasMany(\App\Models\TbProduto::class, 'id_fornecedor');
	}
}
