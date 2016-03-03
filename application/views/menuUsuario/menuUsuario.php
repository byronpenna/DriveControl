<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>...:::MENU PRINCIPAL:::...</title>
	<?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  	?>
  	<style ="type:text/css">
		#header{			
			background-image: url(<?php echo base_url("content/img/f19.png") ?>);
  			background-repeat: no-repeat center top;
  			background-size: 100% 100%;
				}
		#espe{
			font-weight: normal;
  			font-style: italic;
  			color:#66FFFF;  			
  			padding: 10px;
		}
		#prin{			
			background-image: url(<?php echo base_url("content/img/f10.jpg") ?>);
  			background-repeat: no-repeat center top;
  			background-size: cover;
				}
	</style>
</head>
<body  id="prin">
	<div class="row" id="header">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h1 id="espe">...Bienvenido!!</h1>
		</div>
		<div class="col-md-1">nombre de usuario aqui<br><button type="button" class="btn btn-default btn-xs">SALIR</button></div>		
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-9">
			<div class="col-md-4">
				<div class="panel panel-info">
  				<div class="panel-heading">..:: MENU PRINCIPAL ::..</div>
  				<div class="panel-body">
    				<ul class="nav nav-pills nav-stacked">
				  <li role="presentation" class="active"><a href="#">Registrar Vehiculo</a></li>
				  <li role="presentation"><a href="#">Control del Vehiculo</a></li>
				  <li role="presentation"><a href="#">Control de no se que</a></li>
				  <li role="presentation"><a href="#">Nueva busqueda</a></li>
				  <li role="presentation"><a href="#">Ajustes</a></li>
				</ul>	
  				</div>
				</div>				
			</div>
		</div>		
		<div class="col-md-1"></div>
	</div>
	<div class="row"></div>
	<?php
    	$this->load->view("parts/scripts.php");
  	?>
</body>
</html>