<!DOCTYPE html>
<html>
<center> 
 <img src=<?php echo base_url("Content/img/banner.jpg") ?>>
 </center> 
<head>
	<title>Principal</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
</head>
<center> 
                     <img  WIDTH=1500, HEIGTH=1000 src=<?php echo base_url("Content\img\banner.jpg" ) ?>>
 </center>
<body>
	<h1 class="text-center">Bienvenido</h1>
	<!-- <h4 class="text-center">Gracias por usar drive car</h4> -->
	<a href=<?php echo site_url("welcome/cerrarSession") ?>>Cerrar session</a>
	<?php 
		$this->load->view("parts/scripts.php");
	?>
</body>
</html>