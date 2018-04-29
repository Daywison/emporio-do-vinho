<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Apr 2018 21:07:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Input;
use md5;

/**
 * Class TbUsuario
 * 
 * @property int $id_usuario
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property \Carbon\Carbon $data_cadastro
 * @property bool $status
 * @property string $tipo
 *
 * @package App\Models
 */
class TbUsuario extends Eloquent
{
	protected $table = 'tb_usuario';
	protected $primaryKey = 'id_usuario';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool'
	];

	protected $dates = [
		'data_cadastro'
	];

	protected $fillable = [
		'nome',
		'email',
		'senha',
		'data_cadastro',
		'status',
		'tipo'
	];

	public static function cadastrar($data){
		$nome=Input::get('nome');
		$email=Input::get('email');
		$senha=md5(Input::get('senha'));
		$data_cadastro=date("Y-m-d");

		if (Input::get('status') == 'on'){
			$situacao = 1;
		}else{
			$situacao = 0;
		}

		$status=$situacao;
		$tipo=Input::get('tipo');

		$usuario = new TbUsuario();

		$usuario->nome = $nome;
		$usuario->email = $email;
		$usuario->senha = $senha;
		$usuario->data_cadastro = $data_cadastro;
		$usuario->status = $status;
		$usuario->tipo = $tipo;

		$usuario->save();

	}
}
