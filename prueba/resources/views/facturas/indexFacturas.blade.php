<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mostrar Facturas </title>
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
              <h1>Mostrar la lista de  Facturas</h1>
             <h2> @if (Session::has('mensaje'))
              {{ Session::get('mensaje') }}
              @endif</h2>
              
              
              
              <a  class="btn btn-primary" href="{{ url('facturas/create') }}">Crear Facturas</a>

                <!-- Inicio FOMRULARIO  main -->
              <table class="table">
                <thead>
                  <tr>
                   <th scope="col">#</th>
                   <th scope="col">N° Identificación</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">N° Solicitud</th>
                    <th scope="col">Concepto</th>
                    <th scope="col">Iva Factura</th>
                    <th scope="col">Total Factura</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col">Acción</th>


                  </tr>
                </thead>
                <tbody>
                  @foreach( $facturas as $facturas)
                  <tr>
                    <td>{{ $facturas -> id }}</td>
                    <td>{{ $facturas -> IdentificacionFactura}}</td>
                    <td>{{ $facturas -> FechaFactura}}</td>
                    <td>{{ $facturas -> SolicitudNumeroFactura}}</td>
                    <td>{{ $facturas -> Concepto}}</td>
                    <td>{{ $facturas -> IvaFactura}}</td>
                    <td>{{ $facturas -> TotalFactura}}</td>
                    <td>{{ $facturas -> ObservacionFactura}}</td>


                    <td>
                    <a href="{{ url('/facturas/'.$facturas->id.'/edit') }}" class="btn btn-success">Editar</a>
                      |
                      <form action="{{ url('/facturas/'.$facturas->id) }}" method="post">
                      @csrf
                      {{ method_field('DELETE') }}
                      <input type="submit" onclick="return confirm('¿Estas seguro?')"  class="btn btn-danger"value="Borrar">
                    
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
                      <h1>Crear Facturas</h1>
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