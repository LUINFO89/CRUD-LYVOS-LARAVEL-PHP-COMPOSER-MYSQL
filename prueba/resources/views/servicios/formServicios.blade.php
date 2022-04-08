

<div class="container bootstrap snippet">
  
                  
  <div class="row">
    <!--/col-3-->
    <div class="col-sm-9">
      <div class="tab-content">
        <div class="tab-pane active" id="home">
          <hr>
          <form class="form" action="{{ url('/servicios') }}" method="post" id="registrationForm" enctype="multipart/form-data">
          @csrf 
          <div class="form-group">
              <div class="col-xs-6">
                <label for="first_name">
                  <h4>Nombre Producto o Servicio</h4>
                </label>
                <input type="text" class="form-control" name="ServiNombre" id="NombreProdcuto"
                  title="Ingrese el Nombre del Prodcuto . " value="{{ isset($servicios->ServiNombre)?$servicios->ServiNombre:'' }}">
                  <label>
                  <h4>Precio del Producto </h4>
                </label>
                  <input type="text" class="form-control" name="ServiPrecio" id="ServiPrecio"
                  title="Ingrese el precio ServiPrecio . " value="{{ isset($servicios->ServiPrecio)?$servicios->ServiPrecio:'' }}">
                  <label>
                </label>
          
              </div>
          <div class="form-group">
              <div class="col-xs-12">
                <br>
                <button class="btn btn-lg btn-success"  type="submit"><i
                    class="glyphicon glyphicon-ok-sign" ></i> Guardar </button>          
                  <a  class="btn btn-lg btn-primary" href="{{ url('servicios/') }}">Regresar </a>
              </div>
            </div>
          </form>

        </div>
      </div>
      <!--/tab-pane-->
    </div>
    <!--/tab-content-->

  </div>
  <!--/col-9-->
</div>