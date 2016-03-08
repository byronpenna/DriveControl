<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  ?>


</head>
<body> 
  <br>
  <br>
<div class="container">
<div class="panel-primary">
  <div class="panel-heading"> 
   <center> <h1> Ingreso de Vehiculo </h1></center>
 </div>
   <div class ="panel-body">
    <form role="form">


<center><div class="form-group"></center>
 <center> <label for="ejemplo_password_1">Clase de Vehiculo</label></center>
  <center><select class="combobox">
<?php 
foreach ($CVehiculo as $key => $clase) {
 ?>
    <option value="">
<?php echo $clase ->clase ?> 
<?php } ?>
</option>
  </select> </center></div>


<center><div class="form-group"></center>
 <center> <label for="ejemplo_password_1">Tipo de Vehiculos </label></center>
  <center><select class="combobox">
<?php 
foreach ($TVehiculo as $key => $tipo) {
 ?>
    <option value="">
<?php echo $tipo ->tipo?> 
<?php } ?>
</option>
  </select> </center></div>

  <center><div class="form-group"></center>
 <center> <label for="ejemplo_password_1">Marca</label></center>
  <center><select class="combobox">
        <?php 
foreach ($marcas as $key => $marca) {
 ?>
    <option value="">
<?php echo $marca ->marca ?> 
<?php } ?>
</option>
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
 
 <center><div class="form-group"></center>
 <center> <label for="ejemplo_password_1">Llanta</label></center>
  <center><select class="combobox">
    <?php 
foreach ($ll as $key => $LLANTA) {
 ?>
    <option value="">
<?php echo $LLANTA ->LLANTA ?> 
<?php } ?>
</option>
  </select> </center></div>

<center><div class="form-group"></center>
 <center> <label for="ejemplo_password_1">Numero de Ring</label></center>
  <center><select class="combobox">
<?php 
foreach ($rines as $key => $num_rin) {
 ?>
    <option value="">
<?php echo $num_rin ->num_rin ?> 
<?php } ?>
</option>
  </select> </center></div>

<center><div class="form-group"></center>
 <center> <label for="ejemplo_password_1"> Aceite</label></center>
  <center><select class="combobox">
  <option value="PA">2000</option>
  <option value="CT">2012</option>
  <option value="NY">2013</option>
  <option value="MD">2014</option>
  <option value="VA">2015</option>
  </select> </center></div>
  <br>
 
 <br>
 
  <center><button type="submit" class="btn btn-primary">Agregar Vehiculo</button></center>
  <br>
  <br>
</form>
  </div>
</div>
</div>

    <?php
    $this->load->view("parts/scripts.php");
  ?>
</body>
</html>