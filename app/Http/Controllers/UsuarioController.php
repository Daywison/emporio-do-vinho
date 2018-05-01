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

    // Redirecionar para o form de cadastro de usuário
     public function formulario_cadastro(){
        return view('usuarios.cadastrar');
     }

     // Cadastrar Usuários
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
            return Redirect::to('form_usuario')->withErrors($validador);
        }else{
            TbUsuario::cadastrar(Input::except(array('_token', 'confirma_senha')));
            return Redirect::to('form_usuario')->with('sucesso', 'usuário cadastrado com sucesso');
        }
    }

    // Listar usuários na view
    public function listar(){
        //Recupero os usuários cadastrados no banco
        $usuarios = TbUsuario::orderBy('data_cadastro', 'desc')->paginate(10);


        //Repasso os usuários para a view
        return view('usuarios.gerenciar_usuario',compact('usuarios'));
        
    } 

    // Editar usuários
    public function editar($id_usuario){

        $usuario = TbUsuario::find($id_usuario);
        
        return view('usuarios.editar',compact('usuario'));
        
        
    }

    public function atualizar($id_usuario){
        $usuario = TbUsuario::find($id_usuario);

        $nome=Input::get('nome');
        $email=Input::get('email');
        $senha=md5(Input::get('senha'));
        $status=Input::get('status');
        $tipo_usuario=Input::get('tipo');

        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->senha = $senha;
        $usuario->status = $status;
        $usuario->tipo_usuario = $tipo_usuario;

        $usuario->save();

        return redirect()->action('UsuarioController@listar');
        
        
    }

    public function excluir($id_usuario){
        $usuario = TbUsuario::find($id_usuario);
        $usuario->delete();

        return redirect()->action('UsuarioController@listar');

    }
}
