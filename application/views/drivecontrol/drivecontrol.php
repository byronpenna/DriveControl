<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  ?>
<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/principal/stile.css")?>>

</head>
<body>
  <header>
 <nav class="navbar navbar-default navbar-backgrnd navbar-fixed-top" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
<div class="navbar-header navbar-right">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<img src=<?php echo base_url("Content/img/drive.PNG") ?>></a>
</div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->

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
</header>

 <!-- SLIDER -->
 <div class="Container">
<div id="#mySlider" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mySlider" data-slide-to="0" class="active"></li>
    <li data-target="#mySlider" data-slide-to="1"></li>
    <li data-target="#mySlider" data-slide-to="2"></li>
    <li data-target="##mySlider" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active">
      <img src=<?php echo base_url("Content/img/s1.jpg") ?> >
    </div>

    <div class="item">
      <img src=<?php echo base_url("Content/img/s2.jpg") ?> >
    </div>

    <div class="item">
      <img src=<?php echo base_url("Content/img/s3.jpg") ?>>
    </div>

  </div>  
    <?php
      $this->load->view("parts/scripts.php");
    ?>
    <script>
    $('.carousel').carousel({
        interval: 1000 //changes the speed
    })
    </script>
    
</body>
</html>


