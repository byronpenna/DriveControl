<!DOCTYPE html>
<html>

<?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  ?>
  <!-- estilos personalizados -->
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/recuperarcontra/style.css") ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/recuperarcontra/media.css") ?>>

<center> 
                     <img  WIDTH=1500, HEIGTH=1000 src=<?php echo base_url("Content\img\banner.jpg" ) ?>>
 </center> 

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h4>Restablecer la Contraseña</h4>
            <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="Nombre" />
            </br>
            <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Contraseña" />
            </br>
            <input type="text" id="userCPassword" class="form-control input-sm chat-input" placeholder="Confirmar Contraseña" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <a href="#" class="btn btn-primary btn-md">Enviar... <i class="fa fa-sign-in"></i></a>
            </span>
            </div>
            </div>
        
        </div>
    </div>
</div>