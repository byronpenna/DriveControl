<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  ?>


</head>
<body>
 <nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <img src=<?php echo base_url("Content/img/drive.png") ?>></a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav nav-pills ddmenu">
      <li class="active"><a href="#">Inicio</a></li>
      <li class="active"><a href=<?php echo base_url("index.php") ?>>Iniciar sesion</a></li>
      <li class="active"><a href=<?php echo site_url("welcome/registro") ?>>Registrarse</a></li>
      <li class="active"><a href="#">Contactos </a></li>
      <li class="active"><a href="#">Informacion de Productos</a></li>
          <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
    </ul>
  </div>

</nav>

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
      <img src=<?php echo base_url("Content/img/1e.jpg") ?> alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src=<?php echo base_url("Content/img/1b.jpg") ?> alt="Chania">
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

  <!-- Left and right controls -->
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
</body>
</html>