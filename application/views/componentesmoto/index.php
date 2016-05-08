<!DOCTYPE html>
<html>
<head>
  <title>componentes motocicleta</title>
  <?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  ?>
  <!-- estilos personalizados -->
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/componentescarro/style.css") ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/componentescarro/media.css") ?>>

    <header>

    <?php 
      $this->load->view("parts/menu.php");


    $this->load->view("parts/scripts.php");
    ?>
  </header>

<center> 
 <img src=<?php echo base_url("Content/img/moto.png") ?>>
 </center> 

<div class="container">
    <div class="page-header">
        <h1>PARTES DE UNA MOTO</h1>
    </div>
    <div class="row">
        <div class="col-md-6">

<div class="panel panel-default">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Acelerador </h3>
  </div>

<div class="panel-rightbody">

      <p>El acelerador es un dispositivo que aumenta o disminuye la velocidad del motor. Para usar el acelerador
      <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/acemoto.jpg" ) ?>>
 </center> 
</p>
</div>
    <div class="clearfix">
    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Cadena</h3>
  </div>

<div class="panel-rightbody">

      <p>Compruebe si hay holgura excesiva en la cadena de transmisión. Es peligroso conducir con un cadena floja, ya que podría salirse del engranaje de accionamiento y se enredan con la rueda trasera 
      <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/cadenamoto.jpg" ) ?>>
 </center> 
</p>
</div>
    <div class="clearfix">
    </div>
</div>

<div class="panel panel-success">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Chasis</h3>
  </div>

<div class="panel-rightbody">

      <p>El chasis es la columna vertebral de la moto, al cual todos los componentes son instalados y conectados. El chasis provee puntos de apoyo para el motor y el tanque de gasolina, así como un punto de pivote donde se instala la caña de dirección. 
      <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/aceitemoto.jpg" ) ?>>
 </center> 
</p>
</div>
    <div class="clearfix">
    </div>
</div>


<div class="panel panel-warning">  
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Controles</h3>
  </div>
  <div class="panel-rightbody">
      <p>Acciona el freno del acelerador, embrague, delantero y trasero para asegurar que estos están funcionando correctamente. 
 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/controlesmoto.jpg" ) ?>>
 </center> 
</p>
  </div>
    <div class="clearfix">
    </div>
</div>



<div class="panel panel-danger">  
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Claxon</h3>
  </div>
  <div class="panel-rightbody">
      <p>Pulsa el botón de la bocina ligeramente para asegurarse de que funciona.
 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/claxonmoto.jpg" ) ?>>
 </center> 
</p>

  </div>
    <div class="clearfix">
    </div>     
</div>

    </div>
    <div class="row">
      <div class="col-md-6">


<div class="panel panel-default">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Deposito de aceite</h3>
  </div>
  <div class="panel-rightbody">
      <p>Comprobar que el aceite del motor está entre los niveles alto y bajo. Si es bajo, rellena con aceite de motor nuevo hasta el nivel requerido.
      <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/depositomoto.jpg" ) ?>>
 </center> 
      </p>


  </div>
    <div class="clearfix">
    </div>
</div>


<div class="panel panel-primary">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle"> Deposito de Gasolina</h3>
  </div>
  <div class="panel-rightbody">
      <p> Antes de conducir, realiza una comprobación visual y operacional en su motocicleta. Esto reducirá las posibilidades de un accidente mientras viajas por carretera, lo que creará molestias a los demás usuarios. 
   <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/depositogasmoto.jpg" ) ?>>
 </center> 

        </p>
      
  </div>
    <div class="clearfix">
    </div>
</div>




<div class="panel panel-success">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Escape</h3>
  </div>
  <div class="panel-rightbody">
      <p> Mediante esta pieza, la motocicleta puede expulsar los gases quemados durante la combustión (el monóxido de carbono y otros agentes nocivos). Está constituido generalmente por un colector de escape que recoge los gases de escape en salida de los cilindros prolongado por un dispositivo de evacuación.

<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/escapemoto.jpg" ) ?>>
 </center> 
      </p>
  </div>
    <div class="clearfix">
    </div>
</div>
    </div>
    <div class="col-md-6">



    <div class="panel panel-danger">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Espejo Retrovisor</h3>
  </div>
  <div class="panel-rightbody">
      <p> Ajuste los espejos hasta que el extremo del hombro se puede ver en el borde inferior del espejo. No ajustes el espejo mientras la motocicleta está en marcha.

<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/espejosmoto.jpg" ) ?>>
 </center> 
      </p>
  </div>
    <div class="clearfix">
    </div>
</div>
    </div>
    <div class="col-md-6">



    <div class="panel panel-warning">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Luces</h3>
  </div>
  <div class="panel-rightbody">
      <p> Enciende las luces siguientes para comprobar que todos están trabajando:

<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/lucesmoto.jpg" ) ?>>
 </center> 
      </p>
  </div>
    <div class="clearfix">
    </div>
</div>
    </div>
    <div class="col-md-6">




    <div class="panel panel-info">  
<div class="panel-leftheading">
      <h3 class="panel-lefttitle">Maneta Izquierda</h3>
  </div>
  <div class="panel-rightbody">
      <p>El propósito de la palanca de embrague es para conectar y desconectar la potencia del motor a la rueda trasera.
<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/manetaizquierda.jpg" ) ?>>
 </center> 

</p>
  </div>
    <div class="clearfix">
    </div>   
    </div>


<div class="panel panel-primary">  
<div class="panel-leftheading">
      <h3 class="panel-lefttitle">Maneta derecha</h3>
  </div>
  <div class="panel-rightbody">
      <p>
La palanca de freno se encuentra en el lado derecho del manillar y se utiliza para reducir la velocidad o detener la motocicleta. La maneta derecha acciona los frenos de las ruedas delanteras
<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/maneraderecha.jpg" ) ?>>
 </center> 

</p>
  </div>
    <div class="clearfix">
    </div>   
    </div>

<div class="panel panel-success">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Motor</h3>
  </div>
  <div class="panel-rightbody">
      <p>El motor de una moto es su corazón, y los diferentes tipos aplicados, dictan el carácter de la máquina. Normalmente va propulsada por un motor de gasolina de dos o cuatro tiempos (2T y 4T)
 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/motormoto.jpg" ) ?>>
 </center>  
</p>
  </div>
    <div class="clearfix">
    </div>
</div>
    </div>
    <div class="col-md-6">



    <div class="panel panel-info">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Pistones</h3>
  </div>
  <div class="panel-rightbody">
      <p>Las motocicletas tienen generalmente uno o dos pistones. La acción del pistón en la cámara de combustión crea la energía que alimenta la moto. Lo hace a través de un sistema de combustión de dos o de cuatro tiempos.
 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/pistonesmoto.jpg" ) ?>>
 </center>  
</p>
  </div>
    <div class="clearfix">
    </div>
</div>
    </div>
    <div class="col-md-6">


    <div class="panel panel-warning">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Neumaticos</h3>
  </div>
  <div class="panel-rightbody">
      <p>Revisa los neumáticos pinchados, deflactados, dañados o desgastados peldaños (con una profundidad inferior a 1,6 mm).
<center>
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/neumaticosmoto.jpg" ) ?>>
 </center>  
</p>
  </div>
    <div class="clearfix">
    </div>
</div>
    </div>
    <div class="col-md-6">



    <div class="panel panel-danger">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Transmision</h3>
  </div>
  <div class="panel-rightbody">
      <p>La transmisión del movimiento que impulsa a la moto se efectúa, en su forma más sencilla, con una cadena engranada en unos piñones y conectada con el eje de la rueda trasera.

<center>
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/transmisionmoto.jpg" ) ?>>
 
 </center>  
</p>
  </div>
    <div class="clearfix">
    </div>
</div>
    </div>
    <div class="col-md-6">


<div class="panel panel-primary">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Pedal Izquierdo</h3>
  </div>
  <div class="panel-rightbody">
      <p>Este pedal acciona el cambio de engranajes y para ello es necesario utilizar el pie izquierdo. Se utiliza para seleccionar la marcha adecuada para que coincida con la velocidad y la potencia de la motocicleta.

<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/pedalmoto.jpg" ) ?>>
 </center>  
</p>
  </div>
    <div class="clearfix">
    </div>
</div>

    </div>
    <div class="col-md-6">

 </div>
 </div>
 </div>
 </div>
 </div>
<header>
    <?php 
      $this->load->view("parts/footer.php");
    ?>
  </header>

<!-- 


