<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Models\TbUsuario;
use md5;
use DB;


class LoginController extends Controller
{
    public function login(){

    	$dados=Input::except(array('_token'));

    	
    	$regras=array(
    		'email' =>'required|email',
    		'senha' =>'required',
    		
    	);

    	$mensagem=array(
    		'email.required'=>'O email é obrigatório',
    		'senha.required'=>'A senha é obrigatória',	

    	);

    	
    	$validador=Validator::make($dados,$regras,$mensagem);

    	//verifico se houve o preenchimento dos campos
    	if ($validador->fails()) {
    		return Redirect::to('/')->withErrors($validador);
    	}else{

    		$email=Input::get('email');
			$senha=md5(Input::get('senha'));

			// verifico se o usuário existe no banco
			$usuarios = DB::table('tb_usuario')
			->where([
    		['email', '=', $email],
    		['senha', '=', $senha],
			])->get();


			if (count($usuarios) > 0) {
				return Redirect::to('dashboard');
    		}else{
				return Redirect::to('/');
			}
    		
    	}
    }
}
