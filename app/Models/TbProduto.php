<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbProduto
 * 
 * @property int $id_produto
 * @property int $id_fornecedor
 * @property int $id_marca
 * @property int $id_categoria
 * @property string $descricao
 * @property int $cod_barras
 * @property float $valor_custo
 * @property float $valor_venda
 * @property int $icms
 * @property int $ipi
 * @property int $pis
 * @property int $cofins
 * @property int $iva
 * @property float $margem_lucro
 * @property \Carbon\Carbon $data_cadastro
 * 
 * @property \App\Models\TbCategoria $tb_categoria
 * @property \App\Models\TbFornecedore $tb_fornecedore
 * @property \App\Models\TbMarca $tb_marca
 * @property \App\Models\TbEstoque $tb_estoque
 * @property \Illuminate\Database\Eloquent\Collection $tb_itens_vendas
 * @property \App\Models\TbLogMovimentacaoEstoque $tb_log_movimentacao_estoque
 * @property \Illuminate\Database\Eloquent\Collection $tb_pedido_items
 * @property \App\Models\TbProdutoValidade $tb_produto_validade
 *
 * @package App\Models
 */
class TbProduto extends Eloquent
{
	protected $primaryKey = 'id_produto';
	public $timestamps = false;

	protected $casts = [
		'id_fornecedor' => 'int',
		'id_marca' => 'int',
		'id_categoria' => 'int',
		'cod_barras' => 'int',
		'valor_custo' => 'float',
		'valor_venda' => 'float',
		'icms' => 'int',
		'ipi' => 'int',
		'pis' => 'int',
		'cofins' => 'int',
		'iva' => 'int',
		'margem_lucro' => 'float'
	];

	protected $dates = [
		'data_cadastro'
	];

	protected $fillable = [
		'id_fornecedor',
		'id_marca',
		'id_categoria',
		'descricao',
		'cod_barras',
		'valor_custo',
		'valor_venda',
		'icms',
		'ipi',
		'pis',
		'cofins',
		'iva',
		'margem_lucro',
		'data_cadastro'
	];

	public function tb_categoria()
	{
		return $this->belongsTo(\App\Models\TbCategoria::class, 'id_categoria');
	}

	public function tb_fornecedore()
	{
		return $this->belongsTo(\App\Models\TbFornecedore::class, 'id_fornecedor');
	}

	public function tb_marca()
	{
		return $this->belongsTo(\App\Models\TbMarca::class, 'id_marca');
	}

	public function tb_estoque()
	{
		return $this->hasOne(\App\Models\TbEstoque::class, 'id_produto');
	}

	public function tb_itens_vendas()
	{
		return $this->hasMany(\App\Models\TbItensVenda::class, 'id_produto');
	}

	public function tb_log_movimentacao_estoque()
	{
		return $this->hasOne(\App\Models\TbLogMovimentacaoEstoque::class, 'id_produto');
	}

	public function tb_pedido_items()
	{
		return $this->hasMany(\App\Models\TbPedidoItem::class, 'id_produto');
	}

	public function tb_produto_validade()
	{
		return $this->hasOne(\App\Models\TbProdutoValidade::class, 'id_prod_validade');
	}
}
