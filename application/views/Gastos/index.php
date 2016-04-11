<!DOCTYPE html>
<html>
<head>
	<title>Gastos</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
</head>
<body>
	<div class="col-lg-3">
		<h1>Control de gastos</h1>
		<select class="form-control">
			<option value="-1"> Seleccione su vehiculo</option>
			<?php 
				foreach ($vehiculos as $key => $vehiculo) {
			?>
				<option value=<?php echo $vehiculo->idVehiculo ?>><?php echo $vehiculo->imprimir ?> </option>
			<?php
				}
			?>
		</select>
	</div>
	<?php
		$this->load->view("parts/scripts.php");
	?>
</body>
</html>