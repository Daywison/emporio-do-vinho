@extends('layout');

@section('content')

<!--   <h2>Vertical (basic) form</h2>
  <form action="login" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
      @if($errors->has('email')) <p class="text-danger">{{$errors->first('email')}}</p>@endif
    </div>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Digite sua senah" name="senha">
      @if($errors->has('senha')) <p class="text-danger">{{$errors->first('senha')}}</p>@endif
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Lembrar me</label>
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
  </form> -->

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



    <!-- <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form action="login" method="POST">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <input type="text" class="form-control" placeholder="Digite seu email" required autofocus name="email">
                  <input type="password" class="form-control" placeholder="Digite sua senha" required name="senha">
                  <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Enviar</button>
                  <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                  </label>
                </form>
            </div>
        </div>
    </div>
 -->
  
@endsection
