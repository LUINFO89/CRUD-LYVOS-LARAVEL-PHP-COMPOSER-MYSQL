<div class="container bootstrap snippet">
  <div class="row">
    <!--/col-3-->
    <div class="col-sm-9">
      <div class="tab-content">
        <div class="tab-pane active" id="home">
          <hr>
          <form class="form" action="{{ url('/solicitudes') }}" method="post" id="registrationForm" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <div class="col-xs-6">

                <div class="col-xs-6">
                  <label for="first_name">
                    <h4>Codigo del estudiante</h4>
                  </label>

                  <input type="text" name="SoICodigoEs" class="form-control" id="SoICodigoEs" placeholder="Codigo" value="{{ isset($solicitudes->SoICodigoEs)?$solicitudes->SoICodigoEs:'' }}">

                </div>
                <label for="first_name">

                  <h4>Tipo de documento</h4>

                </label>
                <select class="form-control" name="tipodoc" id="tipodoc" title="Ingrese su primer Nombre aqui.">
                  <option> CC </option>
                  <option> TI </option>
                  <option> RC </option>
                  <option> DE </option>

                </select>


              </div>
              <div class="col-xs-6">
                <label for="first_name">
                  <h4>Identificación</h4>
                </label>
                <input name="SoIIndentificacion" class="form-control" id="SoIIndentificacion" type="text" placeholder="Identificación" value="{{ isset($solicitudes->SoIIndentificacion)?$solicitudes->SoIIndentificacion:'' }}">
              </div>
              <hr>
              <div class="col-xs-6">
                <label>
                  <h4>Nombres </h4>
                </label>
                <input name="SolNombres" class="form-control" id="SolNombres" type="text" placeholder="Nombres" value="{{ isset($solicitudes->SolNombres)?$solicitudes->SolNombres:'' }}">
              </div>
            </div>
            <div class="form-group">

              <div class="col-xs-6">
                <label>
                  <h4>Apellidos</h4>
                </label>
                <input name="SolApellidos" class="form-control" id="SolApellidos" type="text" placeholder="Apellidos" value="{{ isset($solicitudes->SolApellidos)?$solicitudes->SolApellidos:'' }}">

              </div>
              <div class="col-xs-6">
                <label>
                  <h4> Dirección</h4>
                </label>
                <input name="SolDireccion" class="form-control" id="SolDireccion" type="text" placeholder="Direccion" value="{{ isset($solicitudes->SolDireccion)?$solicitudes->SolDireccion:'' }}">
              </div>
            </div>
            <hr>


            <div class="form-group">
              <div class="col-xs-6">
                <label for="mobile">
                  <h4>Email</h4>
                </label>
                <input name="SolEmail" class="form-control" id="SolEmail" type="text" placeholder="Email" value="{{ isset($solicitudes->SolEmail)?$solicitudes->SolEmail:'' }}">
              </div>
            </div>
            <div class="form-group">

              <div class="col-xs-6">
                <label for="email">
                  <h4>Telefono</h4>
                </label>
                <input name="SolTelefono" class="form-control" id="SolTelefono" type="text" placeholder="Telefono" value="{{ isset($solicitudes->SolTelefono)?$solicitudes->SolTelefono:'' }}">
              </div>
            </div>

            <hr>

            <div class="col-xs-6">
              <label for="codigo">
                <h4>Codigo o Numero de servicio</h4>
              </label>
              <input name="SolServiNumero" class="form-control" id="SolServiNumero" type="text" size="20" placeholder="#" value="{{ isset($solicitudes->SolServiNumero)?$solicitudes->SolServiNumero:'' }}">
            </div>
            <div class="col-xs-6">
              <label for="nombre">
                <h4>Nombre del Servicio: </h4>
              </label>
              <input name="SolNombreProducto" class="form-control" id="SolNombres" type="text" size="20" placeholder="" value="{{ isset($solicitudes->SolNombreProducto)?$solicitudes->SolNombreProducto:'' }}">
            </div>
            <div class="col-xs-6">
              <label for="precio">
                <h4>Precio del servicio</h4>
              </label>
              <input name="SoliTotal" class="form-control" id="SoliTotal" type="text" size="20" placeholder="" value="{{ isset($solicitudes->SoliTotal)?$solicitudes->SoliTotal:'' }}">
            </div>

            <label for="first_name">

            <h4>Modificar el estado de la solicitud</h4>

            </label>
            <select class="form-control" name="SoliEstado" id="SoliEstado" title="Ingrese su SoliEstado.">
              <option> Completada </option>
              <option> Pendiente </option>
              <option> En Tramite </option>
              <option> En Gestión Administrativa </option>

            </select>



            <div class="form-group">
              <div class="col-xs-12">
                <br>
                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Guardar </button>
                <a class="btn btn-lg btn-primary" href="{{ url('solicitudes/') }}">Regresar </a>

              </div>
            </div>
          </form>

          <hr>

        </div>
      </div>
      <!--/tab-pane-->
    </div>
    <!--/tab-content-->

  </div>
  <!--/col-9-->
</div>