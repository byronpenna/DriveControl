<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
	<!-- estilo del menu -->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/principal/stile.css")?>>
	<!-- estilos personalizados -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/welcome/registro/style.css") ?>>
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/welcome/registro/media.css") ?>>
</head>
<body>
	<header>
    <?php 
      $this->load->view("parts/menu.php");

    ?>
  </header>
 

	<input type="hidden" class="txtHdUrl" value=<?php echo site_url(); ?>></input>
	<input type="hidden" class="txtHdBaseUrl" value=<?php echo base_url(); ?>></input>
	<input type="hidden" class="txtHdRetorno" value=<?php echo site_url("welcome/login") ?>></input>



 <div class="row">
        <div class='col-md-3'></div>
        <div class="col-md-6">
           

		<div class="panel-heading">Registrate Gratis</div>
		<form class="frm">
		 <div class="panel-body">

		 <img id="profile-img" class="profile-img-card" src=<?php echo base_url("Content/img/registrarse.png") ?> />

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



		 <br>
		 	<div class="divLoading">

		 	</div>
			<button class="btn btn-default  btn-block btn-primary btnRegistro">Registrarse</button>
			<div class="divMessage">
				 </div>



    </div>

			</div>
		</form>



		 <br><br>


	</div>
	<?php
		$this->load->view("parts/scripts.php");
		$this->load->view("parts/footer.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("Content/js/welcome/registro/functions.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/welcome/registro/script.js") ?>></script>

<div class="col-md-22">
                    <ul class="social-network social-circle">
                        
                        <li><a href="https://www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://google.com" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        
                    </ul>       
        </div>

    <br><br><br>


</body>
</html>