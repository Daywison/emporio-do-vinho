@extends('dashboard.cabecalho')

@section('content')


<div class="container">
<h2 class="titulo_cadastro">Edição de Usuários</h2>

@if(Session::has('sucesso'))
<div class="row"> 
  <div class="col-md-6 form_cadastro_usuario">
    <div class="alert alert-success">{{Session::get('sucesso')}}</div>
  </div>
</div>
@endif
  <form action="{{ url('/usuario_atualizar', $usuario->id_usuario) }}" method="POST" class="form_cadastro_usuario">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="nome" class="form-control" id="nome"  name="nome" value="{{$usuario->nome}}">
      @if($errors->has('nome')) <p class="text-danger">{{$errors->first('nome')}}</p>@endif
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email"  name="email" value="{{$usuario->email}}">
      @if($errors->has('email')) <p class="text-danger">{{$errors->first('email')}}</p>@endif
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" name="senha" value="{{$usuario->senha}}">
      @if($errors->has('senha')) <p class="text-danger">{{$errors->first('senha')}}</p>@endif
    </div>
    <div class="form-group">
      <label for="senha">Confirme a senha:</label>
      <input type="password" class="form-control" id="confirma_senha"  name="confirma_senha" value="{{$usuario->senha}}">
      @if($errors->has('confirma_senha')) <p class="text-danger">{{$errors->first('confirma_senha')}}</p>@endif
    </div>
    <div class="form-group">      
      <label for="status">Status</label>
      <?php echo Form::select('status', ['ATIVO'=> 'ATIVO', 'INATIVO'=>'INATIVO'], $usuario->status, ['class' => 'form-control']) ?>
    </div>
    <div class="form-group">      
      <label for="tipo">Tipo Usuário</label>
      <?php echo Form::select('tipo', ['ADMINISTRADOR'=>'ADMINISTRADOR', 'ATENDENTE'=>'ATENDENTE'], $usuario->tipo_usuario, ['class'=>'form-control'])?>          
    </div>   
    <button type="submit" class="btn btn-success">Editar</button>
  </form>
  </div>
  @endsection