<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Adega</title>  
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">  
  <link href="{{ asset('css/dashboard.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/estilo.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="/dashboard">Empório do Vinho</a>
    <a href="#">
          <span class="glyphicon glyphicon-log-out">Logout</span>
        </a>
  </nav>  
@yield('content')

