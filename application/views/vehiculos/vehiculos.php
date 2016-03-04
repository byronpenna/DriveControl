<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  ?>


</head>
<body background=<?php echo base_url("Content/img/1e.jpg") ?> >

    <?php
    $this->load->view("parts/scripts.php");
  ?>
  <br>
  <br>
<div class="container">
<div class="panel-primary">
  <div class="panel-heading"> 
   <center> <h1> Ingreso de Vehiculo </h1></center>
 </div>
   <div class ="panel-body">
    <form role="form">
<center><label for="ejemplo_password_1">Marca</label></center>

<div class="checkbox">
 <center> <label>             <input type="checkbox" value="">Automovil</label></center>
</div>
<div class="checkbox">
 <center> <label>             <input type="checkbox" value="">Autobus</label></center>
</div>
<div class="checkbox">
  <center><label>            <input type="checkbox" value="" >Microbus</label></center>
</div>
<div class="checkbox ">
 <center> <label>            <input type="checkbox" value="" >Pick Up</label></center>
</div>

  <center><div class="form-group"></center>
 <center> <label for="ejemplo_password_1">Modelo</label></center>
  <center><select class="combobox">
  <option value="PA">Pennsylvania</option>
  <option value="CT">Connecticut</option>
  <option value="NY">New York</option>
  <option value="MD">Maryland</option>
  <option value="VA">Virginia</option>
  </select> </center></div>
<center><div class="form-group"></center>
 <center> <label for="ejemplo_password_1">Año</label></center>
  <center><select class="combobox">
  <option value="PA">2000</option>
  <option value="CT">2012</option>
  <option value="NY">2013</option>
  <option value="MD">2014</option>
  <option value="VA">2015</option>
  </select> </center></div>
<br>
    <div class="form-group">
    <center><label for="ejemplo_password_1">Modelo</label></center>
    <input type="password" class="form-control" id="ejemplo_password_1" 
           placeholder="Modelo">
  </div>
  <div class="form-group">
    <center><label for="ejemplo_password_1">Numero de llanta</label></center>
    <input type="password" class="form-control" id="ejemplo_password_1" 
           placeholder="Introduce el numero de llanta">
  </div>
    <div class="form-group">
    <center><label for="ejemplo_password_1">Numero de Ring </label></center>
    <input type="password" class="form-control" id="ejemplo_password_1" 
           placeholder="Introduce el ring de la llanta">
  </div>
      <div class="form-group">
    <center><label for="ejemplo_password_1">Aceite  </label></center>
    <input type="password" class="form-control" id="ejemplo_password_1" 
           placeholder="Introduce el ring de la llanta">
  </div>
  <center><button type="submit" class="btn btn-primary">Agregar Vehiculo</button></center>
  <br>
  <br>
</form>
  </div>
</div>
</div>
</body>
</html>