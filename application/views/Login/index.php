<!DOCTYPE html>
<html>
<head>
	<title>Esta es la vista</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
	<!-- estilos personalizados -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/login/style.css") ?>>
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/login/media.css") ?>>
</head>
<body>
	<div class="container">
	    <div class="card card-container" id="divLoginInvitado">
	        <form action="/" id="frmInvitado" method="post">
	            <img id="profile-img" class="profile-img-card" src=<?php echo base_url("Content/img/profle.png") ?> />
	            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
	            <span class="visibilitiHidden"> </span>
	            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	            <span class="visibilitiHidden"> </span>
	            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
	            <a href="#" class="forgot-password">
	                Registrarse
	            </a>
	        </form>
	    </div>
	    
	</div>

</body>
</html>