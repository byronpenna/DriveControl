<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesion</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
<!-- estilo del menu -->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/principal/stile.css")?>>
	<!-- estilos personalizados -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/login/style.css") ?>>
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/login/media.css") ?>>
</head>
<body>
	  <header>
    <?php 
      $this->load->view("parts/menu.php");
    ?>
  </header>

	<input type="hidden" class="txtHdUrl" value=<?php echo site_url(); ?>>
	</input>
	<div class="container">
	    <div class="card card-container" id="divLoginInvitado">


	    <div class="panel panel-primary">



		<div class="panel-heading">Iniciar Sesion</div>
	        <form action="/" id="frmInvitado" method="post">
	            <img id="profile-img" class="profile-img-card" src=<?php echo base_url("Content/img/profle.png") ?> />
	            <input type="text" id="txtUsuario" name="txtUsuario" class="form-control" placeholder="Email address" required autofocus>
	            <span class="visibilitiHidden"> </span>
	            <input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="Password" required>
	            <span class="visibilitiHidden"> </span>
	            <button class="btn btn-lg btn-primary btn-block btn-primary" type="submit">Entrar</button>
	            

<br><br>
	            <a href=<?php echo site_url("welcome/registro") ?> class="forgot-password">
	                Registrate!
	            </a>
	            <div class="row mensajesLogin"></div>
	        </form>
	    </div>
	    
	</div>
	</div>
	
	<script type="text/javascript" src=<?php echo base_url("Content/js/welcome/functions.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/welcome/scripts.js") ?>></script>
<div class="col-md-22">
                    <ul class="social-network social-circle">
                        
                        <li><a href="https://www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://google.com" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        
                    </ul>       
        </div>

    <br><br><br>

<?php
		$this->load->view("parts/scripts.php");
		 $this->load->view("parts/footer.php");
	?>
</body>
</html>