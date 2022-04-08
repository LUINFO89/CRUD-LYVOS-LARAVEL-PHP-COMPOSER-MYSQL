

<div class="container bootstrap snippet">
                  <div class="row">
                    <!--/col-3-->
                    <div class="col-sm-9">
                      <div class="tab-content">
                        <div class="tab-pane active" id="home">
                          <hr>
                          <form class="form" action="{{ url('/estudiante') }}" method="post" id="registrationForm" enctype="multipart/form-data">
                          @csrf 
                          <div class="form-group">
                              <div class="col-xs-6">
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
                                <input type="text" class="form-control" name="identificacion" id="identificacion"
                                  title="Ingrese su identificacion . " value="{{ isset($estudiante->identificacion)?$estudiante->identificacion:'' }}">
                              </div>
                              <div class="col-xs-6">
                                <label>
                                  <h4>Nombres </h4>
                                </label>
                                <input type="text" class="form-control" name="nombres" id="nombres"
                                   title="Ingrese su primer Nombre aqui."value="{{ isset($estudiante->nombres)?$estudiante->nombres:' ' }}">
                              </div>
                            </div>
                            <div class="form-group">

                              <div class="col-xs-6">
                                <label>
                                  <h4>Apellido Paterno</h4>
                                </label>
                                <input type="text" class="form-control" name="apellidopaterno" id="last_name"
                                   title="Ingrese su apellido." value="{{ isset($estudiante->apellidopaterno)?$estudiante->apellidopaterno:' ' }}">
                              </div>
                              <div class="col-xs-6">
                                <label >
                                  <h4>Apellido Materno</h4>
                                </label>
                                <input type="text" class="form-control" name="apellidomaterno" id="last_name"
                                   title="Ingrese su Segunda Nombre aqui."  value="{{ isset($estudiante->apellidomaterno)?$estudiante->apellidomaterno:' ' }}">
                              </div>
                            </div>


                            <div class="form-group">
                              <div class="col-xs-6">
                                <label for="mobile">
                                  <h4>Mobile</h4>
                                </label>
                                <input type="text" class="form-control" name="telefono" id="telefono"
                                   title="enter your mobile number if any." value="{{ isset($estudiante->telefono)?$estudiante->telefono:' ' }}" >
                              </div>
                            </div>
                            <div class="form-group">

                              <div class="col-xs-6">
                                <label for="email">
                                  <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" name="email" id="email"
                                  title="enter your email."value="{{ isset($estudiante->email)?$estudiante->email:' ' }}">
                              </div>
                            </div>
                            <div class="form-group">

                              <div class="col-xs-6">
                                <label >
                                  <h4>Dirección</h4>
                                </label>
                                <input type="text" class="form-control" id="direccion" name="direccion"
                                  title="enter a location"value="{{isset($estudiante->direccion)?$estudiante->direccion:' ' }}">
                              </div>
                            </div>
                            <div class="form-group">

                              <div class="col-xs-6">
                                <label>
                                  <h4>Nombre Acudiente</h4>
                                </label>
                                <input type="text" class="form-control" name="acudiente" id="acudiente"
                                   title="enter your password."value="{{isset($estudiante->acudiente)? $estudiante->acudiente:' ' }}">
                              </div>
                              
                            </div>
                            <div class="form-group">

                              <div class="col-xs-6">
                                <label>
                                  <h4> Curso</h4>
                                </label>
                                <input type="text" class="form-control" name="curso" id="curso"
                                  title="enter your password."value="{{isset($estudiante->curso)? $estudiante->curso :' ' }}">
                              </div>
                              
                            </div>
                            <div class="form-group">

                              <div class="col-xs-6">
                                <label for="password">
                                  <h4>Password</h4>
                                </label>
                                <input type="password" class="form-control" name="password" id="password"
                                   title="enter your password."value="{{isset($estudiante->password)? $estudiante->password:' ' }}">
                              </div>
                              <div class="col-xs-6">
                                <label >
                                  <h4>Foto</h4>
                                </label>

                                                            
                                <input type="file" class="form-control" name="Foto" id="Foto"
                                   title="enter your foto."value="{{ isset($estudiante->Foto)?$estudiante->Foto:' ' }}">

                                   @if(isset($estudiante->Foto))
                                    <img src="{{ asset('storage').'/'.$estudiante->Foto }}" alt="" width="40" height="40" > 

                                  @endif
        
                              </div>
                              
                            </div>

                            <div class="form-group">
                              <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success"  type="submit"><i
                                    class="glyphicon glyphicon-ok-sign" ></i> Guardar </button>
                               
                                    <!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCrear">
                                     Crear Estudiante
                                    </button-->
                                
                                  <a  class="btn btn-lg btn-primary" href="{{ url('estudiante/') }}">Regresar </a>

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