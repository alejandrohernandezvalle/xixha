<!DOCTYPE html>
<html lang="es">  
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sipax, Xixhá">
    <meta name="author" content="Alejandro Hernández Valle">
    <meta name="generator" content="Sipax, Xixhá">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIPAX</title>
  
  <!--Modal-->  
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script-->
  <!----------------------------------------------------------------->

  <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/e-estilo.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>

  
</head>
<body>
  <div class="container">
    <div class="container-fluid">

      <!--#Menu-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{url('/')}}"><img class="navbar-brand-minimized" src="{{asset('img/brand/sygnet.svg')}}" width="90" height="90" alt="Xixha Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="dropdown-item e-coloresx text-center te4" href="{{url('supervisors/index')}}">Inicio</a>
            </li>                   
          </ul>
          <span class="navbar-item">
            <a class="dropdown-item e-coloresx te3" href="{{url('logout')}}">Salir</a>
          </span>
        </div>
      </nav>    
      <!--Contenido-->      
      @yield('contenido')      
    </div>
  </div>
  <script src="{{asset('js/jquery-3.3.1.slim-cnd.min.js')}}"></script>
  <script src="{{asset('js/popper-cnd.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-cnd.min.js')}}"></script>
  <script src="{{asset('js/js.js')}}"></script>

  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"-->
  <!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script-->

  @stack('scripts')
</body>
</html>