<!DOCTYPE html>
<html lang="en">
<head>

  <?php
      $this->load->view("parts/estilos.php"); // Estilos universales
  ?>

	<meta charset="UTF-8">
	<title>Control de vehículos</title>
</head>
<body>
<br>
<div class="container">
<div class="panel-primary">
  <div class="panel-heading"> 
   <center> <h1>Control de vehículos</h1></center>

 </div>
    <div class ="panel-body">
    <form role="form">
	<hr>
<center><div class="form-group"></center>
<center>
	<table border="2" width="60%">
		<thead>
			<tr>
				<td><center><b>Vehículos</b></center></td>
			</tr>

			<tbody>

			<?php
			foreach ($vehiculo as $key => $identificador) {
			?>

			<tr>
				
				<td><?php echo "Vehículo #".$identificador->id.", año: ".$identificador->anio.", motor: ".$identificador->motor ?></td>

			</tr>

			<?php
			}
			?>

			</tbody>

		</thead>

	</table>

	<br>
	<br>

	<div align="center"> 
    <table border="0" width="600" id="table1"> 
        <tr> 
            <td colspan="2"><h3 align="center">Eliminar vehículo</h3></td> 
        </tr> 
        <form method="POST" action="borrar.php"> 
        <tr> 
            <td width="50%">&nbsp;</td> 
            <td width="50%">&nbsp;</td> 
        </tr> 
        <tr> 
            <td width="50%"> 
            <p align="center"><b>ID del vehículo a eliminar: </b></td> 
            <td width="50%"> 
            <p align="center"><input type="text" name="id" size="20"></td> 
        </tr> 
        <tr> 
            <td width="50%">&nbsp;</td> 
            <td width="50%">&nbsp;</td> 
        </tr> 
        <tr> 
            <td width="100%" colspan="2"> 
            <p align="center"> 
            <input type="submit" value="Eliminar" name="B1"></td> 
        </tr> 
        </form> 
    </table> 
</div> 


</body>
</html>