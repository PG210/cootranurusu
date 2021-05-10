<br>
<div class="text-center">
<img src="{{url('img/2.png')}}" class="img-fluid" alt="Cargando Imagen...">
</div>
<br>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#3B58F8;">
  <div class="container-fluid">
  <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url('img/2.png')}}" class="imagen" alt="cargando imagen...." > 
               <style>
                img.imagen{
                        position: relative;
                        width: 230px; height: 50px;
                        top: 2px; /* ajustar los valores para mover la imagen */
                        left: 0px;
                        margin: 1%;
                        border:1px solid #fff;
                        display: block;
                      }
                  .color{
                      background-color:#3B58F8;
                  }
                </style>
                </a>
    <button class="navbar-toggler text-dark " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-dark"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{url('/')}}"><b>Inicio</b></a>
        </li>
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <b>Nosotros</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('mis')}}">Misión y visión</a></li>
          
          </ul>
        </li>
        
      </ul>
      <div class="d-flex">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if (Route::has('login'))
            <li class="nav-item">
            @auth
            <a class="nav-link text-white" href="{{ url('/dashboard') }}">Regresar</a>
            @else
            <a class="nav-link text-white "  href="{{ route('login') }}"><b>Iniciar sesión</b></a>
            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                <a  class="nav-link text-white  " href="{{ route('register') }}"><b>Registrarse<b></a>
                @endif
            @endauth
            </li>
            @endif
        </ul>
      </div>
    </div>
  </div>
</nav>



       