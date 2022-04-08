<nav class="col-lg-3 col-3 navBar bg-green vh-100 position-fixed p-lg-3">
  <img src="img/logo.jpg" id="logocol" alt="logo" class="img-fluid mx-auto d-block w-50 mt-lg-2 mb-lg-4" />
  <hr class="border border-white" />

  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('home/') }}">
        <i class="fas fa-home"></i>
        Inicio
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('solicitudes/create') }}">
        <i class="fas fa-tasks"></i><!-- Camnbiar icono en Font Awason -->
        Crear Solicitudes
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('solicitudes/') }}">
        <i class="fas fa-user-cog"></i><!-- Camnbiar icono en Font Awason -->
        Ver Solicitudes y actualización de estado.
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('facturas/') }}">
        <i class="fas fa-tasks"></i><!-- Camnbiar icono en Font Awason -->
        Generar Factura
      </a>
    </li>



    <li class="nav-item">
      <a class="nav-link" href="{{ url('estudiante/') }}">
        <i class="fas fa-user-circle"></i><!-- Camnbiar icono en Font Awason -->
        Crear Estudiantes
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('servicios/') }}">
        <i class="fas fa-user-cog"></i><!-- Camnbiar icono en Font Awason -->
        Crear Servicios o productos
      </a>
    </li>
    <!--li class="nav-item">
            <a class="nav-link" href="PerfilUsuario.html">
              <i class="fas fa-user-circle"></i>
              <!-- Camnbiar icono en Font Awason >
              Perfil de usuarios
            </a>
          </li -->
  </ul>
  <hr class="border border-white" />
</nav>
<header class="col-lg-9 text-white p-0 fixed-top" style="margin-left: 25%">
  <div class="header-content bg-green ms-lg-3 p-lg-2 text-end">
    <div class="me-lg-5">
      
      <span class="me-lg-2 fs-5">
        <a id="navbarDropdown" class="icon-session" href="#" role="button" v-pre>
          {{ Auth::user()->name }}
        </a>
      </span>
      <a class="icon-session" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        <i class="fas fa-power-off"></i>
        {{ __(' Cerrar Sesión') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  </div>
</header>