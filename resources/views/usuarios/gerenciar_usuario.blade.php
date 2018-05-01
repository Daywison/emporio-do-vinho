@extends('dashboard.cabecalho')
@section('content')
<div class="fixed-nav sticky-footer bg-dark dashboard" id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navegacao">   
    <div class="collapse navbar-collapse" id="navbarResponsivo">
      <ul class="navbar-nav navbar-sidenav" id="menus-laterais">
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cadastros">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCadastros">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="nav-link-text">Cadastros</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseCadastros">
            <li>
              <a href="/gerenciar_usuario">Usuários</a>
            </li>
            <li>
              <a href="#">Clientes</a>
            </li>
            <li>
              <a href="#">Funcionários</a>
            </li>
            <li>
              <a href="#">Fornecedores</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Produtos">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProdutos">
            <i class="fa fa-fw fa-barcode"></i>
            <span class="nav-link-text">Produtos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseProdutos">
            <li>
              <a href="#">Cadastrar Produtos</a>
            </li>
             <li>
              <a href="#">Cadastrar Categorias</a>
            </li>
             <li>
              <a href="#">Cadastrar Marcas</a>
            </li> 
             <li>
              <a href="#">Gerenciar Produtos</a>
            </li>            
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vendas">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseVendas">
            <i class="fa fa-fw fa-shopping-basket"></i>
            <span class="nav-link-text">Vendas</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseVendas">
            <li>
              <a href="#">Produtos</a>
            </li>
            <li>
              <a href="#">Balcão</a>
            </li>        
          </ul>
        </li> 
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Estoque">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseEstoque">
            <i class="fa fa-fw fa-cubes"></i>
            <span class="nav-link-text">Estoque</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseEstoque">
            <li>
              <a href="#">Movimentações</a>
            </li>
            <li>
              <a href="#">Ajustes</a>
            </li> 
             <li>
              <a href="#">Compras</a>
            </li>        
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Relatórios">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseRelatórios">
            <i class="fa fa-fw fa-tasks"></i>
            <span class="nav-link-text">Relatórios</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseRelatórios">
            <li>
              <a href="#">Cadastros</a>
            </li>
            <li>
              <a href="#">Vendas</a>
            </li> 
             <li>
              <a href="#">Estoque</a>
            </li>        
          </ul>
        </li>                     
      </ul> 
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <h4>Listar usuários</h4>
      </ol>
    </div>
    <div class="col-md-12 div_buscar_usuario">
    	<button class="btn btn-primary btn_adicionar_usuario"><a href="/form_usuario">Adicionar usuário</a></button>
	    <form action="" class="form-pesquisar">
	      <input type="text" placeholder="Buscar" name="buscar" class="inp_buscar_usuario">
	      <button type="submit"  class="btn_buscar_usuario"><i class="fa fa-search"></i></button>
	    </form>	
    </div> 
    <div class="col-md-12">
    	<table class="table table-striped table-bordered table-hover">
    		<thead>
    		<tr>
    			<td>ID</td>
    			<td>Nome</td>
    			<td>Email</td>
    			<td>Perfil</td>    			
    			<td>Status</td>
    			<td>Ações</td>
    		</tr>
    		<thead>
    		<tbody>
    			@foreach ( $usuarios as $usuario )
    			<tr>
    				<td>{{ $usuario->id_usuario }}</td>
    				<td>{{ $usuario->nome }}</td>
    				<td>{{ $usuario->email }}</td>
    				<td>{{ $usuario->tipo_usuario }}</td>
    				<td>{{ $usuario->status }}</td>
    				<td><a href="{{ url('/usuario_editar', $usuario->id_usuario) }}"><i style="color:gray" class="fa fa-edit fa-lg"></i></a>&nbsp;<a href="{{ url('/usuario_excluir', $usuario->id_usuario) }}"><i style="color:#DC143C"  class="fa fa-trash fa-lg"></i></a></td>
    			</tr>
    			@endforeach		        
    		</tbody>
    	</table>
    </div> 
  </div> 
</div>
@endsection
@extends('dashboard.rodape')