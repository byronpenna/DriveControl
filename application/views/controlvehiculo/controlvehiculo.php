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
				<td width="90"><center><font color="0000FF">Más detalles</font></center></td>
				<td width="80"><center><font color="0000FF">Modificar</font></center></td>
				<td width="80"><center><font color="FF0000">Eliminar</font></center></td>
			</tr>

			<tbody>

			<?php
			foreach ($vehiculo as $key => $identificador) {
			?>

			<tr>
				
				<td><?php echo "Vehículo #".$identificador->id.", año: ".$identificador->anio.", motor: ".$identificador->motor ?></td>
				<td width="90"><center><font color="0000FF">Más detalles</font></center></td>
				<td width="80"><center><font color="0000FF">Modificar</font></center></td>
				<td width="80"><center><font color="FF0000">Eliminar</font></center></td>

			</tr>

			<?php
			}
			?>

			</tbody>

		</thead>

	</table>


</body>
</html>