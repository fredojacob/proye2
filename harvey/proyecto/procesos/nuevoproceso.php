
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Crear Proceso<small></small></h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    


                    <form method="POST" action="procesos/conectar.php" id="frm1" data-parsley-validate class="form-horizontal form-label-left" >


                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="cod_proceso" id="codproceso" placeholder="Codigo de Proceso">
                        <span class="fa fa-yelp form-control-feedback left" aria-hidden="true"></span>
                      </div>


                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" name="edicion" id="edicion" placeholder="Edicion" required="required">
                        <span class="fa fa-bookmark form-control-feedback right" aria-hidden="true"></span>
                      </div>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha   Proceso<span aria-hidden="true"></span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" name="fechaproceso" id="fechaproceso">
                        </div>


                      </div>
                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" required="required">Fecha   Revision<span aria-hidden="true"></span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">

                          <input type="date" class="form-control" name="fecharevison" id="fecharevison">
                        </div>

                        <br>
                      </div>


                <br>
                            <h4>Datos del Responsable</h4>
                      <div class="ln_solid"></div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="nombres" id="nombres" placeholder="Nombres">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" >
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Observaciones
                        </label>
                       <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" name="observaciones" id="observaciones"></textarea>
                        </div>
                      </div>
                      <br>
                      

                         <h4>Especificaciones</h4>
                      <div class="ln_solid"></div>
                      <hr>


                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mision del proceso
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="2"  name="misionproceso" id="misionproceso" ></textarea>
                        </div>
                      </div>


                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Actividades que forman el proceso
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="4" name="actividad" id="activiada" ></textarea>
                        </div>
                      </div>
                     

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Entrada de Proceso
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="2" id="entrada" name="entrada"></textarea>
                        </div>
                      </div>
                     

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Salida de Proceso
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="2" name="salida" id="salida"></textarea>
                        </div>
                      </div>
                     


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Proceso Relacionado</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea   row="2" id="procesorelacionado" name="procesorelacionado" class="form-control"></textarea>

                            
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                           <button type="submit" class="btn btn-success">Guardar</button>
                         
                        </div>
                      </div>


 </form>
