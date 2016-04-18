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
      <li class="active"><a href=<?php echo site_url("welcome/Conctactos") ?>> <span class="glyphicon glyphicon-envelope" aria-hidden="true">  Contactos   </a></li>
      <li class="active"><a href=<?php echo site_url("welcome/Componentes") ?>>><span class="glyphicon glyphicon-list-alt" aria-hidden="true">   Informacion de Productos   </a></li>
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
      <img src=<?php echo base_url("Content/img/s1.jpg") ?> alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src=<?php echo base_url("Content/img/sl2.jpg") ?> alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src=<?php echo base_url("Content/img/1d.jpg") ?> alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>

    <div class="item">
      <img src=<?php echo base_url("Content/img/1c.jpg") ?> alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>
  </div>
  </div>


<a class="left carousel-control" href="#mySlider" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#mySlider" data-slide="next">
            <span class="icon-next"></span>
        </a>
  </div>  
    <?php
      $this->load->view("parts/scripts.php");
    ?>
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
</body>
</html>


