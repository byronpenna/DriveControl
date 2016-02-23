<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
	<!-- estilos personalizados -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/welcome/registro/style.css") ?>>
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/welcome/registro/media.css") ?>>
</head>
<body>
	<input class="txtHdUrl" value=<?php echo site_url(); ?>></input>
	
	<div class="container">
		<h2>Registrarse</h2>
		<form class="frm">
			<label>Nombres</label>
			<input class="form-control txtNombres" name="txtNombres"></input>
			<label>Apellidos:</label>
			<input class="form-control txtApellidos" name="txtApellidos"></input>
			<label>Fecha de nacimiento</label>
			<input type="text" class=" form-control txtNacimiento" name="txtNacimiento"></input>
			<hr>
			<label>Usuario:</label>
			<input type="text" class="form-control txtUsuario" name="txtUsuario"></input>
			<label>Pass:</label>
			<input type="password" class="form-control txtPass" name="txtPass"></input>
			<button class="btn btn-default">Registrarse</button>
		</form>
	</div>
	<?php
		$this->load->view("parts/scripts.php");
	?>
</body>
</html>