<div class="container bootstrap snippet">
  <div class="row">
    <!--/col-3-->
    <div class="col-sm-9">
      <div class="tab-content">
        <div class="tab-pane active" id="home">
          <hr>
          <form class="form" action="{{ url('/facturas') }}" method="post" id="registrationForm" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <div class="col-xs-6">

                <div class="col-xs-6">
                  <label for="first_name">
                    <h4>Fecha:</h4>
                  </label>

                  <input type="date" name="FechaFactura" class="form-control" id="FechaFactura" placeholder="FechaFactura" value="{{ isset($facturas->FechaFactura)?$facturas->FechaFactura:'' }}">

                </div>

              </div>
              <div class="col-xs-6">
                <label for="first_name">
                  <h4>Numero de Solicitud:</h4>
                </label>
                <input name="SolicitudNumeroFactura" class="form-control" id="SolicitudNumeroFactura" type="text" placeholder="SolicitudNumeroFactura" value="{{ isset($facturas->SolicitudNumeroFactura)?$facturas->SoIIndentificacion:'' }}">
              </div>
              <div class="form-group">

              <div class="col-xs-6">
                <label for="email">
                  <h4>Identificacion Cliente</h4>
                </label>
                <input name="IdentificacionFactura" class="form-control" id="IdentificacionFactura" type="text" placeholder="IdentificacionFactura" value="{{ isset($facturas->IdentificacionFactura)?$facturas->IdentificacionFactura:'' }}">
              </div>
              <div class="col-xs-6">
                <label for="email">
                  <h4>Codigo Estudiante</h4>
                </label>
                <input name="CodigoEstudiante" class="form-control" id="CodigoEstudiante" type="text" placeholder="CodigoEstudiante" value="{{ isset($facturas->CodigoEstudiante)?$facturas->CodigoEstudiante:'' }}">
              </div>
            </div>
              <hr>
              <div class="col-xs-6">
                <label>
                  <h4>Concepto </h4>
                </label>
                <input name="Concepto" class="form-control" id="Concepto" type="text" placeholder="Concepto" value="{{ isset($facturas->Concepto)?$facturas->Concepto:'' }}">
              </div>
            </div>
            <div class="form-group">

              <div class="col-xs-6">
                <label>
                  <h4>Iva Factura</h4>
                </label>
                <input name="IvaFactura" class="form-control" id="IvaFactura" type="text" placeholder="IvaFactura" value="{{ isset($facturas->IvaFactura)?$facturas->IvaFactura:'' }}">

              </div>
              <div class="col-xs-6">
                <label>
                  <h4> Total Factura</h4>
                </label>
                <input name="TotalFactura" class="form-control" id="TotalFactura" type="text" placeholder="TotalFactura" value="{{ isset($facturas->TotalFactura)?$facturas->TotalFactura:'' }}">
              </div>
            </div>
            <hr>


            <div class="form-group">
              <div class="col-xs-6">
                <label for="mobile">
                  <h4>Observacion Factura</h4>
                </label>
                <input name="ObservacionFactura" class="form-control" id="ObservacionFactura" type="text" placeholder="ObservacionFactura" value="{{ isset($facturas->ObservacionFactura)?$facturas->ObservacionFactura:'' }}">
              </div>
            </div>
            

            <hr>



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