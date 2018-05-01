<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>  
  <link href="css/bootstrap.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">  
  <link href="css/dashboard.css" rel="stylesheet" type="text/css">
  <link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
  <body>
    <div class="login-form">
      <form action="login" method="POST">
        <h2 class="text-center">Acesso</h2> 
         <input type="hidden" name="_token" value="{{csrf_token()}}">         
          <div class="form-group">
              <input type="email" class="form-control" placeholder="Digite seu email" required="required" name="email">
              @if($errors->has('email')) <p class="text-danger">{{$errors->first('email')}}</p>@endif
          </div>
          <div class="form-group">
              <input type="password" class="form-control" placeholder="Digite sua senha" required="required" name="senha">
              @if($errors->has('senha')) <p class="text-danger">{{$errors->first('senha')}}</p>@endif
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </div>               
      </form>
  </div>  
 </body>
</html>
  
