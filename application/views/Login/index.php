<!DOCTYPE html>
<html>
<head>
	<title>Esta es la vista</title>
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
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
	<input type="hidden" class="txtHdUrl" value=<?php echo site_url(); ?>></input>
	<div class="container">
	    <div class="card card-container" id="divLoginInvitado">
	        <form action="/" id="frmInvitado" method="post">
	            <img id="profile-img" class="profile-img-card" src=<?php echo base_url("Content/img/profle.png") ?> />
	            <input type="text" id="txtUsuario" name="txtUsuario" class="form-control" placeholder="Email address" required autofocus>
	            <span class="visibilitiHidden"> </span>
	            <input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="Password" required>
	            <span class="visibilitiHidden"> </span>
	            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
	            <a href=<?php echo site_url("welcome/registro") ?> class="forgot-password">
	                REGISTRARSE
	            </a>
	            <div class="row mensajesLogin"></div>
	        </form>
	    </div>
	    
	</div>
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("Content/js/welcome/functions.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/welcome/scripts.js") ?>></script>

	 <br><br><br><br><br><br>
  <footer id="pie">
    
    <span><strong>UDB - Analisis y Diseño de sistemas</strong></span>
        <span><font size=2 style="color:#9A9A9A";><i>&copy; [DERECHOS RESERVADOS LJBFE ] &reg;</i></font></span>

  </footer>

  <script type="text/javascript" src=<?php echo base_url("Content/js/Principal/script.js")?>></script>
</body>
</html>