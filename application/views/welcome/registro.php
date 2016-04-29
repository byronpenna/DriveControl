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

 <body>

 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 

 <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">  </div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px">


                         <a href=<?php echo site_url("welcome/login") ?> target="_blank">Iniciar Sesion </a></div>

                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

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
				

				<a href=<?php echo site_url("recuperarcontra/index") ?> class="forgot-password">
	                ¿Recuperar contraseña?
	            </a>
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