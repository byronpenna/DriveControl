<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>...:::MENU PRINCIPAL:::...</title>
	<?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  	?>
  	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href=<?php echo base_url("Content/plugins/jvectormap/jquery-jvectormap-1.2.2.css") ?> > <!-- "plugins/jvectormap/jquery-jvectormap-1.2.2.css" -->
    <link rel="stylesheet" href=<?php echo base_url("Content/dist/css/AdminLTE.min.css") ?> >
    <link rel="stylesheet" href=<?php echo base_url("Content/dist/css/skins/_all-skins.min.css") ?> >
  	<style ="type:text/css">
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
  	/*@import url(https://fonts.googleapis.com/css?family=Gochi+Hand);
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
		}*/	
	</style>
</head>
<body  id="prin" class="hold-transition skin-blue sidebar-mini">
	<!-- <pre>
		<?php 
			//print_r($usuario);
		?>
	</pre> -->
	<!-- <div class="row" id="header">
		<div class="col-md-1"></div>
		<div class="col-md-9">
			<h1 id="espe"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> DriveControl</h1>
		</div>
		<div class="col-md-2">nombre de usuario aqui<br>
			<a href=<?php echo site_url("welcome/cerrarSession") ?> class="btn btn-danger btn-xs">
				<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> CERRAR SESION
			</a>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-9">
			<div class="col-md-4">
				<div class="panel panel-primary">
  				<div class="panel-heading"><center><strong>..:: MENU PRINCIPAL ::..</strong></center></div>
  				<div class="panel-body">
    			<ul class="nav nav-pills nav-stacked">
					<?php
					  	if($usuario->id_rol_fk == 1){
					?>
					<li role='presentation'>
					  	<a href="#">Registrar anunciante</a>
					</li>
					<?php 
					  	}
					?>
					  
					  <li role="presentation">
					  <a href=<?php echo site_url("vehiculos/vehiculos") ?> >
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Vehiculo
					  </a>
					  </li>
					  <li role="presentation"><a href=<?php echo site_url("vehiculos/Modificar_vehiculos") ?>><span class="glyphicon glyphicon-scale" aria-hidden="true"></span> Control del Vehiculo</a></li>
					  <li role="presentation"><a href=<?php echo site_url("vehiculos/Mostrar_Vehiculo") ?>><span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span> Control de no se que</a></li>					  
					  <li role="presentation"><a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Nueva busqueda</a></li>
					  <li role="presentation"><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Deja tu comentario</a></li>
					  <li role="presentation" class="dropdown">
	    				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Ajuestes del Sistema<span class="caret"></span>
	    				</a>
	    					<ul class="dropdown-menu">
							 	<li role="presentation"><a href="#"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Actualizar perfil</a></li>
								<li role="presentation"><a href="#"> Notificaciones</a></li>     
							</ul>
	  				</li>
				</ul>
  				</div>
				</div>				
			</div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading"><center><strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span> ...Perfil de Usuario... <span class="glyphicon glyphicon-user" aria-hidden="true"></span></strong></center></div>
					  <div class="panel-body">
					  	<div class="row">
						  <div class="col-xs-6 col-md-3">
						    <a href="#" class="thumbnail">
						      <img src=<?php echo base_url("Content/img/usr.jpg")?> alt="FOTO USUARIO">
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
  							<span class="glyphicon glyphicon-bell" aria-hidden="true"></span> ALERTAS <span class="badge">#</span>
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

	</footer> -->
	<div class="wrapper">
      <header class="main-header">
        <a href="menuUsuario.php" class="logo">
          <span class="logo-mini"><b>D</b>Crtl</span>
          <span class="logo-lg"><b>Drive</b>Control</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Menu</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-danger">#</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Tienes # alertas...</li>
                  <li>
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> Primer Alerta
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Segunda Alerta
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> Tercer Alerta
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> Cuarta Alerta
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> Quinta Alerta
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src=<?php echo base_url("Content/dist/img/usr.jpg") ?>  class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo "Usuario activo: @usuario" ?></span>
                </a>
                <ul class="dropdown-menu">                  
                  <li class="user-header">
                    <img src=<?php echo base_url("Content/dist/img/usr.jpg") ?>  class="img-circle" alt="User Image">
                    <p>
                      <?php echo "Usuario activo: @usuario" ?> - fecha
                      <small>fecha de registro al sistema</small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src=<?php echo base_url("Content/dist/img/usr.jpg") ?>  class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo "Usuario activo: @usuario"?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="header">Menu Principal</li>
            
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-automobile"></i> <span>Registrar Automovil</span>
              </a>  
            </li>

            
            <li class="treeview">
              <a href=<?php echo site_url("vehiculos/vehiculos") ?>>
                <i class="fa fa-edit"></i>
                <span>Control del Vehiculo</span>                
              </a>
            </li>
            <li class="treeview">
              <a href=<?php echo site_url("Gastos/Index") ?> >
                <i class="fa fa-line-chart"></i>
                <span>Control de Gastos</span>               
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-search"></i>
                <span>Nueva Busqueda</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-paper-plane-o"></i> <span>Comentarios</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-gears"></i> <span>Ajustes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> Editar Perfil</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Notificaciones</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </aside> 
      <div>      
      <img src="dist/img/bg.jpg" alt="">        
      </div>     
      <footer id="pie">    
        <span><strong>UDB - Analisis y Diseño de sistemas</strong></span>
        <span><font size=2 style="color:#9A9A9A";><i>&copy; [DERECHOS RESERVADOS LJBFE ] &reg;</i></font></span>
      </footer> 
    </div>
    <!-- <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    
	<?php
    	$this->load->view("parts/scripts.php");
  	?>
  	<script src=<?php echo base_url("Content/plugins/fastclick/fastclick.min.js") ?> ></script>
    <script src=<?php echo base_url("Content/dist/js/app.min.js") ?> ></script>
    <script src=<?php echo base_url("Content/plugins/sparkline/jquery.sparkline.min.js") ?> ></script>
    <script src=<?php echo base_url("Content/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") ?> ></script>
    <script src=<?php echo base_url("Content/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") ?> ></script>
    <script src=<?php echo base_url("Content/plugins/slimScroll/jquery.slimscroll.min.js")?> ></script>
    <script src=<?php echo base_url("Content/plugins/chartjs/Chart.min.js") ?>></script>
    <script src=<?php echo base_url("Content/dist/js/pages/dashboard2.js") ?> ></script>
    <script src=<?php echo base_url("Content/dist/js/demo.js") ?> ></script>
</body>
</html>