<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>
	<?php
    // estilos universales
      $this->load->view("parts/estilosback.php");
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
  	header{
      margin-bottom: 0;
    }
	</style>
</head>
<body  id="prin" class="hold-transition skin-blue sidebar-mini">
	
	
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
                <!-- <a href="#" class="dropdown-toggle" >
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-danger">#</span>
                </a> -->

              </li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle">
                  <img src=<?php echo base_url("Content/dist/img/usr.jpg") ?>  class="user-image" alt="User Image">
                  <span class="hidden-xs">Usuario activo: </span><?php echo $usuario->usuario ?> 
                </a>
                <ul class="dropdown-menu">                  
                  <li class="user-header">
                    <img src=<?php echo base_url("Content/dist/img/usr.jpg") ?>  class="img-circle" alt="User Image">
                    <p>
                      <?php echo "Usuario activo: ".$usuario->usuario ?> - fecha
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
              <p>Usuario activo: </p>
              <?php echo $usuario->usuario ?>
              <a href=<?php echo site_url("welcome/cerrarSession") ?>>
              	<i class="fa fa-circle text-success"></i> Cerrar Sesion
              </a>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="header">Menu Principal</li>
            <?php
      			  	if($usuario->id_rol_fk == 1){ // if admin
      			?>
              <li class="active treeview">
                <a href=<?php echo site_url("Anunciante/registrar_anunciante") ?> >
                   <i class="fa fa-edit"></i><span>Registrar anunciante</span>
                </a>  
              </li>
      			<?php 
      			  	}
      			?>
      			<?php 
      				if($usuario->id_rol_fk == 3){ // if anunciante
      			?>
      				<li class="active treeview">
      	              <a href=<?php echo site_url("PublicarAnuncio/Publicar_Anuncio") ?> >
      	                 <i class="fa fa-cart-plus" aria-hidden="true"></i><span>Publicar anuncio</span>
      	              </a>  
      	            </li>
      			<?php 
      				}
      			?>	


            <li class="treeview">
              <a href=<?php echo site_url("vehiculos/Mostrar_Vehiculo") ?>>
                <i class="fa fa-automobile"></i>
                <span>Control del Vehiculo</span>                
              </a>
            </li>
            <li class="treeview">
              <a href=<?php echo site_url("Gastos/Index") ?> >
                <i class="fa fa-line-chart"></i>
                <span>Control de Gastos</span>               
              </a>
            </li>

          </ul>
        </section>
      </aside> 
      <div>      
      <img src="dist/img/bg.jpg" alt="">        
      </div>     
     <div style="background: red;width: 100%;text-align: right;">
       hola mundo 
     </div>
    
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



  <script type="text/javascript" src=<?php echo base_url("Content/js/Principal/script.js")?>></script>
  
</body>



</html>