<<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Contacto</title>
  <?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  ?>
  <!-- estilos personalizados -->
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/contactenos/style.css") ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/contactenos/media.css") ?>>

</head>

 <div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">
                      Formulario de Contacto
                    </h3>
  
  <div id="formulario">
   <form role="form" action="contactanos.php" method="POST" id="contacto" title="Nombre">
  <div class="form-group">
  <label for="Nombre">Nombre: </label>
  <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required tabindex="1" >
   <br>
  </div>
  <div class="form-group">
   <label for="Correo">Correo:  </label>
   <input type="text" class="form-control" id="Correo" name="email" placeholder="Correo" required tabindex="2">

   <br>
   </div>
    <div class="form-group">
   <label for="telefono">Teléfono: </label>
   <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono" required tabindex="3">
   <br>
   </div>

          <div class="form-group">
   <label for="ciudad">Ciudad: </label>
   <input type="text" class="form-control" id="Cuidad" name="Cuidad" placeholder="Cuidad" required tabindex="4">
   <br>
   </div>

           <div class="form-group">
   <label for="Pais">Pais: </label>
   <input type="text" class="form-control" id="Cuidad" name="Pais" placeholder="Pais" required tabindex="5">
   <br>
   </div>
          <div class="form-group">
   <label for="Mensaje">Mensaje</label>
   <input type="text" class="form-control" id="Mensaje" name="Mensaje" placeholder="Mensaje" required tabindex="6">
  
 </div>
          <div class="form-group">
   <input type="submit" name="enviar" tabindex="7" maxlength="140" rows="7" value="Enviar"><input type="reset" tabindex="8" value="Borrar">
   <input type="hidden" name="estado" value="1">
   </form>
  </div>




</body>
</html>
