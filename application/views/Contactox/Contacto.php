<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>...:::CONTACTO:::...</title>
	<?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  	?>
  	<style ="type:text/css">
  	@import url(https://fonts.googleapis.com/css?family=Gochi+Hand);
  	@import url(https://fonts.googleapis.com/css?family=Pacifico);
  	@import url(https://fonts.googleapis.com/css?family=Press+Start+2P);
  	@import url(https://fonts.googleapis.com/css?family=Faster+One);
		#header{			
			background-image: url(<?php echo base_url("Content/img/f19.png") ?>);
  			background-repeat: no-repeat center top;
  			background-size: 100% 100%;
				}
		#espe{
			font-weight: normal;
  			font-family: 'Faster One', cursive;
  			color:#FF3300;  			
  			padding: 10px;
		}
		#prin{			
			background-image: url(<?php echo base_url("Content/img/f10.jpg") ?>);
  			background-repeat: no-repeat center top;
  			background-size: cover;
				}
		#pie {
				width: 100%;
				height: 50px;
				background: #000033; 
				position: fixed;
				text-align: center;
			  	vertical-align: middle;
				padding:2px;
				color: #E4EAED;
				text-shadow:0 3px 8px #323232;
				font-family:Oswald,sans-serif;	
				border-top: 2px solid #0101DF;
				border-style: solid;
				bottom:0px;
				display:block;
    			margin:0 auto auto auto;
		}
		footer{
			background: #FFFFFF; 
			height: 100px;
		}
		@font-face {
		 font-family: "mater";
		 font-style: normal;
    	 font-weight: normal;
		 src: url ( <?php echo base_url("Content/css/fonts/CandyShop.woff")?>);}
		@font-face {
		 font-family: "mater";
		 font-style: normal;
    	 font-weight: normal;
		 src: url (<?php echo base_url("Content/css/fonts/CandyShop.ttf")?> );
		}	
	</style>
</head>
<body>
	<header>
		<?php 
	      $this->load->view("parts/menu.php");
	    ?>
	</header>
	<!-- <div class="row" id="header">
		<nav class="navbar navbar-default navbar-backgrnd navbar-fixed-top" role="navigation">
			<div class="navbar-header navbar-right">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        		</button>
				<img src=<?php echo base_url("Content/img/drive.PNG") ?>>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <br> <br> <br><br><ul class="nav navbar-nav navbar-left">
			      <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>   Inicio    </a></li>
			      <li class="active"><a href=<?php echo base_url("index.php") ?>><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>   Iniciar sesion   </a> </li>
			      <li class="active"><a href=<?php echo site_url("welcome/registro") ?>> <span class="glyphicon glyphicon-user" aria-hidden="true"></span>   Registrarse   </a></li>
			      <li class="active"><a href="#"> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Contactos   </a></li>
			      <li class="active"><a href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>   Informacion de Productos   </a></li>
			 		</ul>
  			</div>
		</nav>			
	</div> -->
	<div class="row"><br><br><br><br><br><br><br><br>
		<div class="col-md-1"></div>
		<div class="col-md-9">
			<div class="col-md-4">
			<h1>Contáctenos</h1>
				<div class="panel panel-primary">

  				<div class="panel-heading"><center><strong><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  CONTACTO </strong></center></div>
  				<div class="panel-body">
    			<ul class="nav nav-pills nav-stacked">
					  <li role="presentation"><a href="#">Quejas o sugerencias</a></li>	
				</ul>
  				</div>
				</div>
				<div class="panel panel-primary">
				<center><h4>Buscanos tambien en..</h4></center>
					<div class="row">				
						<div class="col-md-2"></div>
  						<div class="col-xs-8 col-md-4">  							
    						<a href="https://www.facebook.com/profile.php?id=100011595570342" class="thumbnail" target="_blank">
      						<img src=<?php echo base_url("Content/img/fb.png") ?> alt="...">
    						</a>
  						</div>
  						<div class="col-xs-8 col-md-4">
    						<a href="https://twitter.com/DriveControlads" class="thumbnail"  target="_blank">
      						<img src=<?php echo base_url("Content/img/tw.png") ?> alt="Twitter DriveControl">
    						</a>
  						</div>
  					</div>
				</div>				
			</div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading"><center><strong><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contacto</strong></center></div>
					  <div class="panel-body">
					  <form action=<?php echo site_url("Conctactos/enviarCorreo") ?> role="form" method="post">
							<div class="input-group">
							  	<span class="input-group-addon" id="nombre">Nombre: *</span>
							  	<input type="text" name="nombre" class="form-control" placeholder="Juan Carlos Perez" aria-describedby="basic-addon1" required>
							</div><br>
							<div class="input-group">
							  	<span class="input-group-addon" id="correo">Correo: *</span>
							  	<input type="email" name="correo" class="form-control" placeholder="Juan_Carlos_perez@example.com" aria-describedby="basic-addon1" required>
							</div><br>
							<div class="input-group">
							  	<span class="input-group-addon" id="telefono">Telefono: </span>
							  	<input type="tel" name="telefono" class="form-control" placeholder="12345678" aria-describedby="basic-addon1">
							</div><br>
							<div class="input-group">
							  	<span class="input-group-addon" id="asunto">Asunto: *</span>
							  	<input type="text" name="asunto" class="form-control" placeholder="Ejemplo" aria-describedby="basic-addon1" required>
							</div><br>
							<div class="input-group">
							  	<span class="input-group-addon" id="mensaje">Mensaje: *</span>
							  	<textarea class="form-control" name="mensaje" rows="5" required></textarea>
							</div><br>
							<center><button type="submit" class="btn btn-primary">ENVIAR</button></center>
						</form>				    
					  </div>
				</div>
			</div>
		</div>		
		<div class="col-md-1"></div>
	</div><br><br><br><br><br><br>
	<footer id="pie">
		
		<span><strong>UDB - Analisis y Diseño de sistemas</strong></span>
        <span><font size=2 style="color:#9A9A9A";><i>&copy; [DERECHOS RESERVADOS LJBFE ] &reg;</i></font></span>

	</footer>
	<?php
    	$this->load->view("parts/scripts.php");
  	?>
</body>
</html>