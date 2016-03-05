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
  			color:#FF3300;  			
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
			<h1 id="espe">...NADA JENN DIJO QUE NADA IRIA AQUI</h1>
		</div>
		<div class="col-md-1">nombre de usuario aqui<br><button type="button" class="btn btn-default btn-xs">SALIR</button></div>		
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-9">
			<div class="col-md-4">
				<div class="panel panel-danger">
  				<div class="panel-heading"><center><strong>..:: MENU PRINCIPAL ::..</strong></center></div>
  				<div class="panel-body">
    			<ul class="nav nav-pills nav-stacked">
					  <li role="presentation"><a href="#">Registrar Vehiculo</a></li>
					  <li role="presentation"><a href="#">Control del Vehiculo</a></li>
					  <li role="presentation"><a href="#">Control de no se que</a></li>
					  <li role="presentation"><a href="#">Nueva busqueda</a></li>
					  <li role="presentation" class="dropdown">
	    				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ajuestes del Sistema<span class="caret"></span>
	    				</a>
	    					<ul class="dropdown-menu">
							 	<li role="presentation"><a href="#">Registrar Vehiculo</a></li>
								<li role="presentation"><a href="#">Control del Vehiculo</a></li>
								<li role="presentation"><a href="#">Control de no se que</a></li>
								<li role="presentation"><a href="#">Nueva busqueda</a></li>
								<li role="presentation"><a href="#">Ajustes</a></li>     
							</ul>
	  				</li>
				</ul>
  				</div>
				</div>				
			</div>
			<div class="col-md-8">
				<div class="panel panel-danger">
					<div class="panel-heading"><center><strong>...Perfil de Usuario...</strong></center></div>
					  <div class="panel-body">
					  	<div class="row">
						  <div class="col-xs-6 col-md-3">
						    <a href="#" class="thumbnail">
						      <img src=<?php echo base_url("content/img/usr.jpg")?> alt="FOTO USUARIO">
						    </a>
						  </div>
						  <span class="label label-danger">NOMBRE: </span>
						  <br>
						  <span class="label label-danger">APELLIDO: </span>
						  <br>
						  <span class="label label-danger">CORREO: </span>
						  <br>
						  <span class="label label-danger">FECHA DE NACIMIENTO: </span>
						</div>					    
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