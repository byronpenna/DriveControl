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
              <h1> ¿Quiénes somos?</h1>
              <br>
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
          <blockquote><b>DriveControl</b> es un servicio, que nacíó para ofrecerte un control de tus automóviles es una forma efectiva y fácil la cual te ayuda a manejar los gastos que realizas, así como tambien te brinda, un buscador de repuestos los cuales se comparan con los datos que tu llenas al registrarte con nosotros, puedes encontrar los repuestos de manera rápida, sin necesidad de hacer tantas llamadas, y encontrar con exactitud los lugares en los cuales tienen un mejor precio.


Contamos con una plataforma en la que puedas acceder desde cualquier parte, a cualquier hora y siempre con la convicción de que te brindaremos un excelente servicio.

Solo debes registrarte para obtener estos maravillosos beneficios, y muchas promociones que solo nuestras empresas asociadas te brindan a ti, que eres parte de <b>DriveControl</b></blockquote>

        </div>
      </div>    
    </div>
  </section>

  <section id="frecuente" class="home-section">

  <div class="container">

              <div class="section-heading text-center">
              <h1> Preguntas frecuentes</h1>
              <br>
            </div>

  <b>¿Puedo tener más de un vehículo registrado?</b>
  <br>
  Sí, DriveControl te permite gestionar más de un vehículo en nuestra plataforma. Contamos con un servicio de apoyo completo para brindarte la mejor información de los repuestos que necesites para cada uno de tus vehículos.
  <br><br>
  <b>¿Qué tipo de vehículos se pueden registrar en DriveControl?</b>
  <br>
  Automóviles, microbuses, paneles, pick-ups y motocicletas.
  <br><br>
  <b>¿Cómo puedo recibir información y ofertas de las empresas asociadas a DriveControl?</b>
  <br>
  Tenemos la opción <b>Boletin DriveControl</b> si te suscribes al mismo, recibirás las distintas promociones de las empresas asociadas a DriveControl.
  <br><br>
  <b>¿Cómo puedo comparar de una manera fácil los precios de cada repuesto que compre con las empresas asociadas?</b>
  <br>
  En el <b>Perfil de Usuario</b> se encuentra la opción <b>Control de gastos</b> en ella puedes comparar cada uno de los precios de los repuestos previamente comprados, obtener un gasto total por mes y visualizar cuál es la mejor opción para tu compra.
  <br><br>

  </div>

    <div class="section-heading text-center">
              <h1> Misión y Visión</h1>
              <br>
            </div>


  </section>
<center>
<img src=<?php echo base_url("Content/img/visionmision1.jpg")?> class="img-responsive img-rounded" alt="" />
</center>

<br>
<br>
<br>
<br>
<br>


  <div class="col-md-12">
                    <ul class="social-network social-circle">
                        
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        
                    </ul>       
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

