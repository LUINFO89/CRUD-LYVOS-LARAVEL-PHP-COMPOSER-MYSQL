<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mostrar Estudiantes </title>
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
      <!-- Fin Cabecera de la página -->
      <!-- Contenido de la pagina -->
      <main class="col-lg-9 mt-lg-5 p-lg-0" style="margin-left: 25%">
        <div class="m-lg-3 mt-lg-3">
          <div class="card">
            <div class="card-body">
              <!-- Inicio contenido main -->
              <h1>Mostrar la lista de  Estudiantes</h1>
             <h2> @if (Session::has('mensaje'))
              {{ Session::get('mensaje') }}
              @endif</h2>
              <div class="input-group mb-2">
                <input type="text" class="form-control" placeholder="Ingrese la busqueda"
                  aria-label="Recipient's username" aria-describedby="button-addon2" />
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                  Button
                </button>
              </div>
              
              
              <a  class="btn btn-primary" href="{{ url('estudiante/create') }}">Crear Estudiante</a>

                <!-- Inicio FOMRULARIO  main -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Email</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $estudiantes as $estudiante)
                  <tr>
                    <td>{{ $estudiante -> id}}</td>
                    <td >
                    <img src="{{ asset('storage').'/'.$estudiante->Foto }}" alt="" width="90">  
                    <!--{{ $estudiante -> Foto}}-->
                  </td>
                    <td>{{ $estudiante -> nombres}}</td>
                    
                    <td>{{ $estudiante -> apellidopaterno}}</td>
                    <td>{{ $estudiante -> email}}</td>
                    <td>{{ $estudiante -> curso}}</td>
                    <td>
                      <a href="{{ url('/estudiante/'.$estudiante->id.'/edit') }}" class="btn btn-success">Editar</a>
                      |
                      <form action="{{ url('/estudiante/'.$estudiante->id) }}" method="post">
                      @csrf
                      {{ method_field('DELETE') }}
                      <input type="submit" ="return confirm('¿Estas seguro?')"  class="btn btn-danger"value="Borrar">
                    
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- Fin contenido main -->
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="ModalCrear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bg-gradient">
              <div class="modal-body ">
                <div class="container bootstrap snippet">
                  <div class="row">
                    <div class="col-sm-10">
                      <h1>Crear Estudiantes</h1>
                    </div>
                  </div>
                  @include('estudiante.form');
                  <!--/col-9-->
                </div>
              </div>
            </div>
          </div>
        </div>
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