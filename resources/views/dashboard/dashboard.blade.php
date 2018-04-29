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
              <a href="/registrar">Usuários</a>
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
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
    </div>    
</div> 
</div>
@endsection
@extends('dashboard.rodape')