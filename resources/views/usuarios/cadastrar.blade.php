@extends('dashboard.cabecalho')

@section('content')


<div class="container">
<h2 class="titulo_cadastro">Cadastro de Usuários</h2>

@if(Session::has('sucesso'))
<div class="row"> 
  <div class="col-md-6 form_cadastro_usuario">
    <div class="alert alert-success">{{Session::get('sucesso')}}</div>
  </div>
</div>
@endif
  <form action="usuario_cadastrar" method="POST" class="form_cadastro_usuario">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="nome" class="form-control" id="nome" placeholder="Digite seu nome" name="nome">
      @if($errors->has('nome')) <p class="text-danger">{{$errors->first('nome')}}</p>@endif
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
      @if($errors->has('email')) <p class="text-danger">{{$errors->first('email')}}</p>@endif
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha">
      @if($errors->has('senha')) <p class="text-danger">{{$errors->first('senha')}}</p>@endif
    </div>
    <div class="form-group">
      <label for="senha">Confirme a senha:</label>
      <input type="password" class="form-control" id="confirma_senha" placeholder="Confirme sua senha" name="confirma_senha">
      @if($errors->has('confirma_senha')) <p class="text-danger">{{$errors->first('confirma_senha')}}</p>@endif
    </div>
    <div class="form-group">      
      <label for="status">Status</label>
      <select name="status" id="status" class="form-control">
        <option value="">Selecione</option>
        <option value="Ativo">Ativo</option>
        <option value="Inativo">Inativo</option> 
      </select>           
    </div> 
    <div class="form-group">      
      <label for="tipo">Tipo Usuário</label>
      <select name="tipo" id="tipo" class="form-control">
        <option value="">Selecione</option>
        <option value="Administrador">Administrador</option>
        <option value="Atendente">Atendente</option> 
      </select>           
    </div>   
    <button type="submit" class="btn btn-success">Cadastrar</button>
  </form>
  </div>
  @endsection