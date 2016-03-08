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
    <?php 
      $this->load->view("parts/menu.php");
    ?>
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


