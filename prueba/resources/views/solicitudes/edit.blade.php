<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Editar Estudiantes </title>
  <!--- Icon Font Awason --->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <!--- stylesheet CSS --->
  <link rel="stylesheet" type="text/css" href="/lyvos/resources/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="/lyvos/resources/css/css.css" />
  <link rel="stylesheet" href="/lyvos/resources/css/styleFrm.css" />
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Menú de navegación -->
      @include('estudiante.nav');

      <!-- Fin menú de navegación -->

      <!-- Cabecera de la página -->
      <header class="col-lg-9 text-white p-0 fixed-top" style="margin-left: 25%">
        <div class="header-content bg-green ms-lg-3 p-lg-2 text-end">
          <div class="me-lg-5">
            <span class="me-lg-2 fs-5">name@colegiopsicopedagogicoguilford.com</span>
            <a class="icon-session" href="{{ url('/') }}">
              <i class="fas fa-power-off"></i>
              Cerrar Sesión
            </a>
          </div>
        </div>
      </header>
      <!-- Fin Cabecera de la página -->
      <!-- Contenido de la pagina -->
      <!-- Contenido de la pagina -->
      <main class="col-lg-9 mt-lg-5 p-lg-0" style="margin-left: 25%">
        <div class="m-lg-3 mt-lg-3">
          <div class="card">
            <div class="card-body">
              <!-- Inicio contenido main -->
              <h1> Editar Estudiante</h1>
              <form action="{{ url('/solicitudes/'.$solicitudes->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              {{ method_field('PATCH') }}
              @include('solicitudes.form',['modo'=>'Editar']);
              </form>

              
              
            <!-- Fin contenido main -->
            </div>
          </div>
        </div>
        <!-- Modal -->
      </main>
      <!-- Fin contenido de la pagina-->
      <!-- Fin contenido de la pagina-->
    </div>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</body>

</html>