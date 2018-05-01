<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 00:55:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbCliente
 * 
 * @property int $id_cliente
 * @property string $nome_completo
 * @property string $tipo_cliente
 * @property int $cpf
 * @property int $cnpj
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tb_contatos_clientes
 * @property \Illuminate\Database\Eloquent\Collection $tb_endereco_clientes
 *
 * @package App\Models
 */
class TbCliente extends Eloquent
{
	protected $primaryKey = 'id_cliente';
	public $timestamps = false;

	protected $casts = [
		'cpf' => 'int',
		'cnpj' => 'int'
	];

	protected $fillable = [
		'nome_completo',
		'tipo_cliente',
		'cpf',
		'cnpj'
	];

	public function tb_contatos_clientes()
	{
		return $this->hasMany(\App\Models\TbContatosCliente::class, 'id_cliente');
	}

	public function tb_endereco_clientes()
	{
		return $this->hasMany(\App\Models\TbEnderecoCliente::class, 'id_cliente');
	}
}
