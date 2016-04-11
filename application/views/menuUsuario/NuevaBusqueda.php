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
<body  id="prin">
	<div class="row" id="header">
		<div class="col-md-1"></div>
		<div class="col-md-9">
			<h1 id="espe"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> DriveControl</h1>
		</div>
		<div class="col-md-2"><br>
			<a href=<?php echo site_url("welcome/cerrarSession") ?> class="btn btn-danger btn-xs">
				<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> CERRAR SESION
			</a>
		</div>		
	</div>
	<div class="row">
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