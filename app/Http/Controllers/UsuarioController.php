<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Models\TbUsuario;
use Hash;

class UsuarioController extends Controller
{
     public function cadastrar(){
    	$dados=Input::except(array('_token'));

    	//regras para o cadastro de usuários
    	$regras=array(
    		'nome' =>'required',
    		'email' =>'required|email',
    		'senha' =>'required|min:6',
    		'confirma_senha' =>'required|same:senha'
    	);

    	//mensagens
    	$mensagem=array(
    		'nome.required'=>'O nome é obrigatório',
    		'email.required'=>'O email é obrigatório',
    		'senha.required'=>'A senha é obrigatória',
    		'senha.min'=>'A senha deve ter no minimo 6 caracteres',
    		'confirma_senha.required'=>'Por favor confirme sua senha',
    		'confirma_senha.min'=>'A senha deve ter no minimo 6 caracteres',
    		'confirma_senha.same' => 'Senha incorreta'

    	);

    	$validador=Validator::make($dados,$regras,$mensagem);

    	if ($validador->fails()) {
    		return Redirect::to('registrar')->withErrors($validador);
    	}else{
    		TbUsuario::cadastrar(Input::except(array('_token', 'confirma_senha')));
    		return Redirect::to('registrar')->with('sucesso', 'usuário cadastrado com sucesso');
    	}
    }
}
