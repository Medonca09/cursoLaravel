<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="background-color: #262627">
<header>
<nav>
  <div class="nav-wrapper  purple darken-3">
  <div class="container">
    <a href="#!" class="brand-logo">Curso de Laravel</a>
    <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{{route('site.home')}}">Home</a></li>
      @if(Auth::guest())
      <li><a href="{{route('site.login')}}">Login</a></li>
      @else
      <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
      <li><a href="#">{{Auth::user()->name}}</a></li>
      <li><a href="{{route('site.login.sair')}}">Sair</a></li>
      @endif
      
    </ul>
    <ul class="side-nav" id="mobile">
      <li><a href="/">Home</a></li>
      @if(Auth::guest())
      <li><a href="{{route('site.login')}}">Login</a></li>
      @else
      <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
      <li><a href="{{route('site.login.sair')}}">Sair</a></li>
      @endif
    </ul>
  </div>
  </div>
</nav>
</header>