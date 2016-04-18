<!DOCTYPE html>
<html>

<?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  ?>
  <!-- estilos personalizados -->
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Suscripcion/style.css") ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Suscripcion/media.css") ?>>


    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h1 class="modal-title" id="myModalLabel">Suscribete!</h1>
              <h2 class="modal-title" id="myModalLabel">Registro Gratis</h2>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="http://ads2.ritsasv.com/" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Nombre</label>
                                  <input type="text" class="form-control" id="nombre" name="nombre" value="" required="" title="Introduzca su nombre" placeholder="Andres">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="Apellido" class="control-label">Apellido</label>
                                  <input type="text" class="form-control" id="apellido" name="apellido" value="" required="" title="Apellido" placeholder="Gomez">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="Correo" class="control-label">Correo</label>
                                  <input type="text" class="form-control" id="empresa" name="Correo" value="" required="" title="Correo Electonico" placeholder="Correo@hotmail.com">
                                  <span class="help-block"></span>
                              </div>
                              
                              <div class="form-group">
                                  <label for="País" class="control-label">País</label>
                                  <input type="text" class="form-control" id="pais" name="pais" value="" required="" title="País">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  
                                  <input type="submit" class="btn btn-info btn-block" id="registrar" name="registrar" value="Registrar">
                                  
                              </div>
                              
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Registrese ahora para <span class="text-success">GRATIS</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Recibiras 10% de descuento</li>
                          
                          <li><span class="fa fa-check text-success"></span> En tu primera compra</li>
                          


                           
                      </ul>
                      
                  </div>
              </div>
          </div>

          <div class="container">
  <div class="row"><br />
    <div class="col-md-6">
      <div class="progress">
        <div class="one primary-color"></div><div class="two primary-color"></div><div class="three no-color"></div>
        <div class="progress-bar" style="width: 70%;"></div>
    </div>