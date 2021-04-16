<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#3B58F8;">
  <div class="container-fluid">
    <button class="navbar-toggler text-dark " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menu</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#"><b>Inicio</b></a>
        </li>
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <b>Nosotros</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Mision</a></li>
            <li><a class="dropdown-item" href="#">Vision</a></li>
            <li><a class="dropdown-item" href="#">Ubicacion</a></li>
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
            <a class="nav-link text-white "  href="{{ route('login') }}"><b>Iniciar sesion</b></a>
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



       