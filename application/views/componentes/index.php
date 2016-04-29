<!DOCTYPE html>
<html>

<head>
  <title></title>
  
  <!-- meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- frameworks -->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/frameworks/css/bootstrap/css/bootstrap.css") ?>>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/frameworks/css/bootstrap/css/full-slider.css") ?>>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/frameworks/css/font-awesome/css/font-awesome.css") ?> >	
<!-- estilos -->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/universales/style.css")  ?> >	
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/universales/media.css")  ?> >	

	 <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/componentes/style.css") ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/componentes/media.css") ?>>


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
<br> 
<br> 
<br> 
<br> 

<div class="container">

<br>
 <center> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">


         <center> 
 			<img src=<?php echo base_url("Content/img/carro.jpg") ?>>
 			</center> 
            <div class="carousel-caption">
            <h3>Componentes </h3>
            <p>
           Hemos presentado para ti una lista detallada de los componentes que poseen un Automovil o un Motocicleta , para que puedas conocer un poco mas acerca de los mismos.

          </div>
        </div><!-- End Item -->
 
  


    	<ul class="nav nav-pills nav-justified">
   

          <li data-target="#myCarousel" data-slide-to="0" class="active"> <a href=<?php echo site_url("Componentescarro/") ?> target="_blank">Componentes de Automovil </a></li>

			<li data-target="#myCarousel" data-slide-to="0" class="active"> <a href=<?php echo site_url("Componentesmoto/") ?> target="_blank">Componentes de Motocicleta </a></li>
          
        </ul>



    </div><!-- End Carousel -->
</div>

<br><br><br><br><br><br>
  <footer id="pie">
    
    <span><strong>UDB - Analisis y Diseño de sistemas</strong></span>
        <span><font size=2 style="color:#9A9A9A";><i>&copy; [DERECHOS RESERVADOS LJBFE ] &reg;</i></font></span>

  </footer>