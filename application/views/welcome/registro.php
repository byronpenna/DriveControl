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
	<input type="hidden" class="txtHdUrl" value=<?php echo site_url(); ?>></input>
	<input type="hidden" class="txtHdRetorno" value=<?php echo site_url("welcome/login") ?>></input>
	<div class="container">
		<h2>Registrarse</h2>
		<form class="frm">
			<label>Nombres</label>
			<input class="form-control txtNombres" name="txtNombres" required></input>
			<label>Apellidos:</label>
			<input class="form-control txtApellidos" name="txtApellidos" required></input>
			<label>Correo electronico:</label>
			<input type="email" class="form-control txtEmail" name="txtEmail" required></input>
			<label>Fecha de nacimiento</label>
			<input type="date" class=" form-control txtNacimiento" name="txtNacimiento" required></input>
			<hr>
			<label>Usuario:</label>
			<input type="text" class="form-control txtUsuario" name="txtUsuario" required></input>
			<label>Pass:</label>
			<input type="password" class="form-control txtPass" name="txtPass" required></input>
			<button class="btn btn-default">Registrarse</button>
			<div class="divMessage">
				
			</div>
		</form>
	</div>
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("Content/js/welcome/registro/functions.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/welcome/registro/script.js") ?>></script>
</body>
</html>