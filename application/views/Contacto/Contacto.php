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
			background-image: url(<?php echo base_url("content/img/f19.png") ?>);
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
			background-image: url(<?php echo base_url("content/img/f10.jpg") ?>);
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
<body  id="prin">
	<div class="row" id="header">
	<nav class="navbar navbar-default navbar-backgrnd navbar-fixed-top" role="navigation">
	<div class="navbar-header navbar-right">
  		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        </button>
		<img src=<?php echo base_url("Content/img/drive.PNG") ?>></a>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <br> <br> <br><br><ul class="nav navbar-nav navbar-left">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>   Inicio    </a></li>
      <li class="active"><a href=<?php echo base_url("index.php") ?>><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>   Iniciar sesion   </a> </li>
      <li class="active"><a href=<?php echo site_url("welcome/registro") ?>> <span class="glyphicon glyphicon-user" aria-hidden="true">   Registrarse   </a></li>
      <li class="active"><a href="#"> <span class="glyphicon glyphicon-envelope" aria-hidden="true">  Contactos   </a></li>
      <li class="active"><a href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">   Informacion de Productos   </a></li>
 		</ul>
  		</div>
	</nav>			
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-9">
			<div class="col-md-4">
				<div class="panel panel-primary">
  				<div class="panel-heading"><center><strong>..:: MENU PRINCIPAL ::..</strong></center></div>
  				<div class="panel-body">
    			<ul class="nav nav-pills nav-stacked">
					  <li role="presentation"><a href="#">Registrar Vehiculo</a></li>
					  <li role="presentation"><a href="#">Control del Vehiculo</a></li>
					  <li role="presentation"><a href="#">Control de no se que</a></li>					  
					  <li role="presentation"><a href="#">Nueva busqueda</a></li>
					  <li role="presentation"><a href="#">Deja tu comentario</a></li>
					  <li role="presentation" class="dropdown">
	    				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ajuestes del Sistema<span class="caret"></span>
	    				</a>
	    					<ul class="dropdown-menu">
							 	<li role="presentation"><a href="#">Actualizar perfil</a></li>
								<li role="presentation"><a href="#">Notificaciones</a></li>     
							</ul>
	  				</li>
				</ul>
  				</div>
				</div>				
			</div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading"><center><strong>...Perfil de Usuario...</strong></center></div>
					  <div class="panel-body">
					  	<div class="row">
						  <div class="col-xs-6 col-md-3">
						    <a href="#" class="thumbnail">
						      <img src=<?php echo base_url("content/img/usr.jpg")?> alt="FOTO USUARIO">
						    </a>
						  </div>
						  <span class="label label-primary">USUARIO: </span>
						  <br>
						  <span class="label label-primary">NOMBRE: </span>
						  <br>
						  <span class="label label-primary">APELLIDO: </span>
						  <br>
						  <span class="label label-primary">CORREO: </span>
						  <br>
						  <span class="label label-primary">FECHA DE NACIMIENTO: </span>						  
						</div>
						<center>
						<button class="btn btn-primary" type="button">
  							ALERTAS <span class="badge">#</span>
						</button>
						</center>					    
					  </div>
				</div>
			</div>
		</div>		
		<div class="col-md-1"></div>
	</div>
	<footer id="pie">
		
		<span><strong>UDB - Analisis y Diseño de sistemas</strong></span>
        <span><font size=2 style="color:#9A9A9A";><i>&copy; [DERECHOS RESERVADOS LJBFE ] &reg;</i></font></span>

	</footer>
	<?php
    	$this->load->view("parts/scripts.php");
  	?>
</body>
</html>