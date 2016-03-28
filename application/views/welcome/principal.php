<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
</head>
<body>
	<h1 class="text-center">Bienvenido</h1>
	<!-- <h4 class="text-center">Gracias por usar drive car</h4> -->
	<a href=<?php echo site_url("welcome/cerrarSession") ?>>Cerrar session</a>
	<?php 
		$this->load->view("parts/scripts.php");
	?>
</body>
</html>