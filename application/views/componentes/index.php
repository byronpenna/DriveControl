<!DOCTYPE html>
<html>
<head>
  <title>componentes</title>
  <?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  ?>
    <!-- estilo menu -->
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/principal/stile.css")?>>
  <!-- estilos personalizados -->
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/componentes/style.css") ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/componentes/media.css") ?>>

 <header>

    <?php 
      $this->load->view("parts/menu.php");
    ?>
  </header>

<br><br><br><br><br><br><br><br><br>

  <div class="container">
    <div class="page-header">
    <center>
        <h1>Componentes del Vehiculo</h1>
    </center>
    </div>



<center>
 <img src=<?php echo base_url("Content/img/carro.gif") ?>>
 </center> 

<br><br><br>
    <div class="row">
        <div class="col-md-6">
   
    
        
<div class="panel panel-default">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Aceite de motor</h3>
  </div>

  <div class="panel-rightbody">

      <p>Aceite que se utiliza para lubricar los motores de combustión interna. Su propósito principal es lubricar las partes móviles reduciendo la fricción. Además de lubricar el aceite también limpia, inhibe la corrosión y reduce la temperatura del motor transmitiendo el calor lejos de las partes móviles para disiparlo.

      <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/aceite.jpg" ) ?>>
 </center> 
</p>
</div>


    <div class="clearfix">
    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Alternador del motor </h3>
  </div>
  <div class="panel-rightbody">
      <p>Es una máquina eléctrica, capaz de generar energía eléctrica a partir de energía mecánica, generalmente obtenida por un mecanismo de arrastre desde un motor de combustión interna, tanto alternativo, como turbina de gas o Wankel.
</p>

 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/alter.jpg" ) ?>>
 </center> 
      
  </div>
    <div class="clearfix">
    </div>
</div>

<div class="panel panel-success">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Amortiguador</h3>
  </div>
  <div class="panel-rightbody">
      <p>Es un dispositivo construido con un eje cromado y dos tubos de acero (uno dentro del otro). La función del amortiguador es controlar los movimientos de la suspensión, los muelles y/o resortes. El movimiento de la suspensión genera energía cinética, que se convierte en energía térmica o calorífica. Esta energía se disipa a través del aceite.

 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/amor.jpg" ) ?>>
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
      <h3 class="panel-lefttitle">Airbag</h3>
  </div>
  <div class="panel-rightbody">
      <p> “Bolsa de aire”, en inglés. En una colisión fuerte, este cojín se infla en 30 milésimas de segundo, o menos, ante el ocupante -o a su lado, en el caso de los airbag laterales-, con el fin de evitar que se golpee con las partes rígidas del interior del coche. La bolsa (que forma parte del equipamiento de seguridad pasiva del vehículo) se vuelve a desinflar en décimas de segundo, una vez cumplida su misión amortiguadora del impacto
 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/airbag.jpg" ) ?>>
 </center> 
</p>
  </div>
    <div class="clearfix">
    </div>   
    </div>
    
<div class="panel panel-warning">  
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle"> Barra estabilizadora</h3>
  </div>
  <div class="panel-rightbody">
      <p>Elemento de la suspensión constituido por una barra metálica que une las dos ruedas de un mismo eje. No actúa cuando ambas ruedas se desplazan hacia arriba o hacia abajo simultáneamente. Permite tener una suspensión flexible y confortable, aumentando artificialmente la rigidez en curvas.
 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/barra.jpg" ) ?>>
 </center> 
</p>
  </div>
    <div class="clearfix">
    </div>
</div>
    
<div class="panel panel-danger">  
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Bujia</h3>
  </div>
  <div class="panel-rightbody">
      <p>Es el elemento que produce el encendido de la mezcla de combustible y aire en los cilindros, mediante una chispa, en un motor de combustión interna de encendido provocado (MEP), tanto alternativo de ciclo Otto como Wankel. 
La bujía tiene dos funciones primarias:
Inflamar la mezcla de aire y combustible;
Disipar el calor generado en la cámara de combustión hacia el sistema de refrigeración del motor (rango térmico).
 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/bu.jpg" ) ?>>
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
      <h3 class="panel-lefttitle">Cadena de Transmision</h3>
  </div>
  <div class="panel-rightbody">
      <p>Sirve para transmitir del movimiento de arrastre de fuerza entre ruedas dentadas
      Transmitir el movimiento de los pedales a la rueda en las bicicletas o del cambio a la rueda trasera en las motos.
      En los motores de 4 tiempos, para transmitir movimiento de un mecanismo a otro. Por ejemplo del cigüeñal al árbol de levas, o del cigüeñal a la bomba de lubricación del motor.
      <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/cadena.jpg" ) ?>>
 </center> 
      </p>


  </div>
    <div class="clearfix">
    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Culata (motor)</h3>
  </div>
  <div class="panel-rightbody">
      <p> Es la parte superior de un motor de combustión interna que permite el cierre de las cámaras de combustión.

        Son varias las explosiones que se han dado con las configuraciones de la culata, según el tipo de motor, siendo la más sencilla la del motor de dos tiempos refrigerado por aire
   <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/culata.jpg" ) ?>>
 </center> 

        </p>
      
  </div>
    <div class="clearfix">
    </div>
</div>

<div class="panel panel-success">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Depósito de combustible</h3>
  </div>
  <div class="panel-rightbody">
      <p> Conocido tambien como Tanque de combustible es un contenedor seguro para líquidos flamables, que forma parte del sistema del motor, y en el cual se almacena el combustible, que es propulsado para que el avion avance. (mediante la bomba de combustible) o liberado (como gas a presión) en un motor.
<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/tanque.jpg" ) ?>>
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
      <h3 class="panel-lefttitle">Distribuidor (automóvil)</h3>
  </div>
  <div class="panel-rightbody">
      <p>Elemento del sistema de encendido en los motores de ciclo Otto (motores de gasolina, etanol y gas) que envía la corriente eléctrica de alto voltaje, procedente de la bobina de encendido, mediante un dedo o rotor giratorio en el orden requerido por el ciclo de encendido de cada uno de los cilindros hasta las bujías de cada uno de ellos.
<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/distribuidor.jpg" ) ?>>
 </center> 

</p>
  </div>
    <div class="clearfix">
    </div>   
    </div>
    
<div class="panel panel-warning">  
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Embargue</h3>
  </div>
  <div class="panel-rightbody">
      <p>Embrague es un sistema que permite tanto transmitir como interrumpir la transmisión de una energía mecánica a su acción final de manera voluntaria. En un automóvil, por ejemplo, permite al conductor controlar la transmisión del par motor desde el motor hacia las ruedas.

<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/emb.jpg" ) ?>>
 </center>
      </p>


  </div>
    <div class="clearfix">
    </div>
</div>
    
<div class="panel panel-danger">  
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Espejo retrovisor</h3>
  </div>
  <div class="panel-rightbody">
      <p>Un espejo retrovisor es un tipo funcional de espejo que poseen los automóviles y otros vehículos, que están diseñados para permitirle al conductor ver el área que se encuentra detrás del vehículo a través de la ventana posterior.

        Los espejos retrovisores a veces son confundidos con los espejos laterales, que son un tipo diferente de espejos que se ubican sobre los laterales izquierdo y derecho de muchos vehículos modernos. Si bien este tipo de espejos miran hacia atrás, su propósito es mostrarle al conductor el estado del tráfico a la derecha y a la izquierda del automóvil.

<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/espe.jpg" ) ?>>
 </center>



        </p>
  </div>
    <div class="clearfix">
    </div>     
</div>

    </div>
</div>

 <div class="container">
    <div class="page-header">
    <center>
        <h1>Componentes de la motocicleta</h1>
    </center>
    </div>



<center>
 <img src=<?php echo base_url("Content/img/moto1ui7.jpg") ?> width = "600" weight="700">
 </center> 


 <br><br><br>
    <div class="row">
        <div class="col-md-6">
   
    
        
<div class="panel panel-default">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Regulador de compresión</h3>
  </div>

  <div class="panel-rightbody">

      <p>Se halla entre el cuerpo y el depósito del gas, y tiene la misión de controlar la velocidad en la que el muelle se comprime, tanto en la rueda trasera como en la delantera.

      <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/Regulador.jpg" ) ?>>
 </center> 
</p>
</div>


    <div class="clearfix">
    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Chasis</h3>
  </div>
  <div class="panel-rightbody">
      <p>El chasis es la columna vertebral de la moto, al cual todos los componentes son instalados y conectados. El chasis provee puntos de apoyo para el motor y el tanque de gasolina, así como un punto de pivote donde se instala la caña de dirección.
</p>

 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/chasis8.jpg" ) ?>>
 </center> 
      
  </div>
    <div class="clearfix">
    </div>
</div>

<div class="panel panel-success">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Controles</h3>
  </div>
  <div class="panel-rightbody">
      <p>Acciona el freno del acelerador, embrague, delantero y trasero para asegurar que estos están funcionando correctamente.

 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/controlesm.jpg" ) ?>>
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
      <h3 class="panel-lefttitle">Depósito de aceite</h3>
  </div>
  <div class="panel-rightbody">
      <p>Es muy importante verificar que el aceite del motor está entre los niveles alto y bajo. Si es bajo, rellena con aceite de motor nuevo hasta el nivel requerido.
 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/cambioaceite2.jpg" ) ?>>
 </center> 
</p>
  </div>
    <div class="clearfix">
    </div>   
    </div>
    
<div class="panel panel-warning">  
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Depósito de gasolina</h3>
  </div>
  <div class="panel-rightbody">
      <p>Antes de conducir, realiza una comprobación visual y operacional en su motocicleta. Esto reducirá las posibilidades de un accidente mientras viajas por carretera, lo que creará molestias a los demás usuarios. También minimiza la situación de emergencia que puede resultar en accidentes.
 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/Deposito7.jpg" ) ?>>
 </center> 
</p>
  </div>
    <div class="clearfix">
    </div>
</div>
    
<div class="panel panel-danger">  
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Escape</h3>
  </div>
  <div class="panel-rightbody">
      <p>Mediante esta pieza, la motocicleta puede expulsar los gases quemados durante la combustión (el monóxido de carbono y otros agentes nocivos). Está constituido generalmente por un colector de escape que recoge los gases de escape en salida de los cilindros prolongado por un dispositivo de evacuación.
 <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/escape.jpg" ) ?>>
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
      <h3 class="panel-lefttitle">Espejos retrovisores</h3>
  </div>
  <div class="panel-rightbody">
      <p>Ajuste los espejos hasta que el extremo del hombro se puede ver en el borde inferior del espejo. No ajustes el espejo mientras la motocicleta está en marcha.
      <center>
      <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/espejos.jpg" ) ?>>
 </center> 
      </p>


  </div>
    <div class="clearfix">
    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Luces</h3>
  </div>
  <div class="panel-rightbody">
      <p>Se clasifican en: <br>- Luz de cruce y carretera<br>
- Luz delantera de posición<br>
- Luz de advertencia de peligro (si dispones de ella) <br>
- Intermitentes<br>
- Luz de posición trasera<br>
- Luz de freno<br>
   <center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/luces.jpg" ) ?>>
 </center> 

        </p>
      
  </div>
    <div class="clearfix">
    </div>
</div>

<div class="panel panel-success">
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Maneta izquierda</h3>
  </div>
  <div class="panel-rightbody">
      <p>El propósito de la palanca de embrague es para conectar y desconectar la potencia del motor a la rueda trasera. Se utiliza cuando se necesita hacer un cambio de marcha.
<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/manizq.jpg" ) ?>>
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
      <h3 class="panel-lefttitle">Maneta derecha</h3>
  </div>
  <div class="panel-rightbody">
      <p>La palanca de freno se encuentra en el lado derecho del manillar y se utiliza para reducir la velocidad o detener la motocicleta.
<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/mander.jpg" ) ?>>
 </center> 

</p>
  </div>
    <div class="clearfix">
    </div>   
    </div>
    
<div class="panel panel-warning">  
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Motor</h3>
  </div>
  <div class="panel-rightbody">
      <p>El motor de una moto es su corazón, y los diferentes tipos aplicados, dictan el carácter de la máquina. Normalmente va propulsada por un motor de gasolina de dos o cuatro tiempos (2T y 4T), aunque últimamente los dos tiempos están siendo reservados a las cilindradas más pequeñas debido a razones medioambientales por ello la mayoría de las motos de hoy en día son de cuatro tiempos.

<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/motomoto.jpg" ) ?>>
 </center>
      </p>


  </div>
    <div class="clearfix">
    </div>
</div>
    
<div class="panel panel-danger">  
  <div class="panel-leftheading">
      <h3 class="panel-lefttitle">Transmisión</h3>
  </div>
  <div class="panel-rightbody">
      <p>La transmisión del movimiento que impulsa a la moto se efectúa, en su forma más sencilla, con una cadena engranada en unos piñones y conectada con el eje de la rueda trasera. Esta cadena va engrasada para que se desgaste menos y su funcionamiento sea más silencioso.

<center> 
 <img  WIDTH=200, HEIGTH=100 src=<?php echo base_url("Content/img/comp/transmision.jpg" ) ?>>
 </center>



        </p>
  </div>
    <div class="clearfix">
    </div>     
</div>

    </div>
</div>