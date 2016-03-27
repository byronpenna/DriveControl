<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // estilos universales
  $this->load->view("parts/estilos.php");
  ?>
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/principal/stile.css")?>>

  <!-- Start WOWSlider.com HEAD section -->
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/principal/styleSlider.css")?> media="screen" />
  <script type="text/javascript" src=<?php echo base_url("Content/js/slider/jquery.js")?>></script>
  <!-- End WOWSlider.com HEAD section -->

</head>

<body>
  <header>

    <?php 
      $this->load->view("parts/menu.php");
    ?>
  </header>

<!-- SLIDER -->
<div class="Container">
  
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
      <li class="active"><a href="#"> <span class="glyphicon glyphicon-envelope" aria-hidden="true">  Contactanos   </a></li>
      <li class="active"><a href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">   Informacion de Productos   </a></li>
      <li class="active"><a href="#"><span class="glyphicon glyphicon-tasks" aria-hidden="true">   Empresas Asociadas  </a></li>
      <li class="active"><a href="#about"><span class="glyphicon glyphicon-pencil" aria-hidden="true">   Acerca de nosotros   </a></li>
 </ul>
  </div>
</nav>
</header>

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

 <!-- SLIDER -->
<!-- Start WOWSlider.com BODY section -->
  <div id="wowslider-container1">
  <div class="ws_images">
<a href="#"><img src=<?php echo base_url("Content/img/S1.jpg") ?> alt="" title="" id="wows0"/></a>
<a href="#"><img src=<?php echo base_url("Content/img/S2.jpg") ?> alt="" title="" id="wows1"/></a>
<a href="#"><img src=<?php echo base_url("Content/img/S3.jpg") ?> alt="" title="" id="wows2"/></a>
</div>
<div class="ws_bullets"><div>
<a href="#wows0" title=""><img src=<?php echo base_url("Content/img/s11.jpg") ?> alt=""/>1</a>
<a href="#wows1" title=""><img src=<?php echo base_url("Content/img/s21.jpg") ?> alt=""/>2</a>
<a href="#wows2" title=""><img src=<?php echo base_url("Content/img/s31.jpg") ?> alt=""/>3</a>
</div></div>
  <a href="#" class="ws_frame"></a>
  <div class="ws_shadow"></div>
  </div>
<script type="text/javascript" src=<?php echo base_url("Content/js/slider/script.js")?>></script>
 <!-- SLIDER FINISH -->


  <!-- Section: about -->
    <section id="about" class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          
            <div class="section-heading text-center">
              <h1>DriveControl</h1>
            </div>
      
            </div>
          
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
        
          <img src=<?php echo base_url("Content/img/Acerca.jpg")?> class="img-responsive img-rounded" alt="" />
        </div>    
        <div class="col-md-6">
          <blockquote>
          Somos un servicio que nacio de la idea de poder llevar el control de tus autos,
          de una forma facil y efectiva, de manera que puedas acceder a nuestra pagina desde
          cualquier dispositivo y a cualquier hora, de modo que puedas encontrar lo que necesites
          para tu auto a cualquier hora.
          </blockquote>
        </div>
      </div>    
    </div>
  </section>

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


