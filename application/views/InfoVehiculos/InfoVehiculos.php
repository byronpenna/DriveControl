<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // estilos universales
  $this->load->view("parts/estilos.php");
  ?>
</head>
<body>
<center><img src=<?php echo base_url("Content/img/bann.jpg") ?> alt=""/></center>
<center><a href=<?php echo site_url("MenuUsuario/menuUsuario") ?>> <img src=<?php echo base_url("Content/img/rperfil.jpg") ?> alt=""/> </a>
</center>
<br>
<br>
<div class="container">
<div align='center'>  
  <div class="table-responsive">
<table class = "table">  
  <form action=<?php echo site_url("vehiculos/Modificar_vehiculos");?> method="POST">
    <thead>
    <tr>  
      <td width='150' style='font-weight: bold'>Nº</td>  
      <td width='150' style='font-weight: bold'>Clase</td>  
      <td width='150' style='font-weight: bold'>Tipo de vehiculo</td>  
      <td width='150' style='font-weight: bold'>Marca</td>  
      <td width='150' style='font-weight: bold'>Año</td>
      <td width='150' style='font-weight: bold'>Transmision</td>  
      <td width='150' style='font-weight: bold'>Llanta</td>  
      <td width='150' style='font-weight: bold'>Nº de Ring</td>  
      <td width='150' style='font-weight: bold'>Nº Motor</td>
      <td width='150' style='font-weight: bold'>Nº Chasis</td>  
      <td width='150' style='font-weight: bold'>Combustible</td>  
      <td width='150' style='font-weight: bold'>Aceite caja</td>  
      <td width='150' style='font-weight: bold'>Aceite motor</td>   
</tr>
  </thead>
  <tbody>
           <?php 
          foreach ($VerV as $valor) {
           ?>
    <tr>
      <td><?php echo $valor ->id ?></td>
      <td><?php echo $valor ->clase ?></td>
      <td><?php echo $valor ->tipo ?></td>
      <td><?php echo $valor ->marca ?></td>
      <td><?php echo $valor ->anio ?></td>
      <td><?php echo $valor ->Transmision ?></td>
      <td><?php echo $valor ->Llanta ?></td>
      <td><?php echo $valor ->motor ?></td>
      <td><?php echo $valor ->chasis ?></td>
      <td><?php echo $valor ->Combustible ?></td>
      <td><?php echo $valor ->Aceite_Caja ?></td>
      <td><?php echo $valor ->Aceite_Motor ?></td>
      <td><button type="submit" class="btn btn-primary" onclick=<?php echo site_url('vehiculos/Modificar_vehiculos/$valor ->id ') ?>>Modificar</button></td>
  <?php } ?>
  </tbody>
</form>
   </table>  


</div> 
</div> 
</div> 


	<?php
$this->load->view("parts/scripts.php");
?>
</body>
</html>