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
		</select>
	</div>
	<?php
		$this->load->view("parts/scripts.php");
	?>
</body>
</html>