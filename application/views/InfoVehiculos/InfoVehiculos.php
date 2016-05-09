<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // estilos universales
  $this->load->view("parts/estilos.php");
  ?>
  <style type="text/css">
    .btnAddVehiculo{
      margin-bottom: 3%; 
    }
  </style>
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
  <a class="btn btn-primary btnAddVehiculo" href=<?php echo site_url("vehiculos/vehiculos") ?> > Agregar vehiculo </a>
<table class = "table">  
  <form action=<?php echo site_url("vehiculos/Modificar_vehiculos/");?> method="POST">
    <thead>
    <tr>  
      <td width='150' style='font-weight: bold'>Nº</td>  
      <td width='150' style='font-weight: bold'>Clase</td>  
      <td width='150' style='font-weight: bold'>Tipo de vehiculo</td>  
      <td width='150' style='font-weight: bold'>Marca</td>  
      <td width='150' style='font-weight: bold'>Modelo</td>
      <td width='150' style='font-weight: bold'>Año</td>
      <td width='150' style='font-weight: bold'>Transmision</td>  
      <td width='150' style='font-weight: bold'>Llanta</td>  
      <td width='150' style='font-weight: bold'>Nº de Ring</td>  
      <td width='150' style='font-weight: bold'>Nº Motor</td>
      <td width='150' style='font-weight: bold'>Nº Chasis</td>  
      <td width='150' style='font-weight: bold'>Combustible</td>  
      <td width='150' style='font-weight: bold'>Aceite caja</td>  
      <td width='150' style='font-weight: bold'>Aceite motor</td> 
      <td width='150' style='font-weight: bold'>Acciones</td>    
    </tr>
  </thead>
  <tbody>
           <?php 
          foreach ($VerV as $key => $valor) {
           ?>
           <?php 
          for ($i=1; $i <=count($valor); $i++) { 
          ?>
    <tr>
      <td> <?php echo $i ?>
              <?php }?> </td>  
      <td><?php echo $valor ->clase ?></td>
      <td><?php echo $valor ->tipo ?></td>
      <td><?php echo $valor ->marca ?></td>
      <td ><?php echo $valor ->modelo ?></td>
      <td><?php echo $valor ->anio ?></td>
      <td><?php echo $valor ->Transmision ?></td>
      <td><?php echo $valor ->Llanta ?></td>
      <td><?php echo $valor ->num_rin ?></td>
      <td><?php echo $valor ->motor ?></td>
      <td><?php echo $valor ->chasis ?></td>
      <td><?php echo $valor ->Combustible ?></td>
      <td><?php echo $valor ->Aceite_Caja ?></td>
      <td><?php echo $valor ->Aceite_Motor ?></td>
      <td>
        <a href="<?php echo site_url('vehiculos/Modificar_vehiculos/'.$valor->id) ?>" class="btn btn-primary btn-xs" > 
          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
        </a>
        <a href="<?php echo site_url('vehiculos/Eliminar_Vehiculo/'.$valor->id) ?>" class="btn btn-primary btn-xs" > 
          <i class="fa fa-trash" aria-hidden="true"></i>
        </a>
      </td>
      <!-- <td><a href="<?php echo site_url('vehiculos/Eliminar_Vehiculo/'.$valor->id) ?>" class="btn btn-primary" > Eliminar </a></td> -->
  </tr>
  <?php } ?>
  </tbody>
</form>
   </table>  


</div> 
</div> 
</div> 
 <br><br><br><br><br><br>
  <footer id="pie">
    
    <span><strong>UDB - Analisis y Diseño de sistemas</strong></span>
        <span><font size=2 style="color:#9A9A9A";><i>&copy; [DERECHOS RESERVADOS LJBFE ] &reg;</i></font></span>

  </footer>

  <script type="text/javascript" src=<?php echo base_url("Content/js/Principal/script.js")?>></script>

	<?php
$this->load->view("parts/scripts.php");
?>
</body>
</html>