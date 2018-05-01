<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function(){
	return view('dashboard.dashboard');
});


Route::get('/form_usuario', 'UsuarioController@formulario_cadastro');
Route::get('/gerenciar_usuario', 'UsuarioController@listar');
Route::get('/usuario_editar/{id_usuario}', 'UsuarioController@editar');
Route::get('/usuario_excluir/{id_usuario}','UsuarioController@excluir');

Route::post('/usuario_cadastrar','UsuarioController@cadastrar');
Route::post('usuario_atualizar/{id_usuario}', 'UsuarioController@atualizar');
Route::post('/login','LoginController@login');