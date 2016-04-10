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

<center> 
 <img src=<?php echo base_url("Content/img/carro.gif") ?>>
 </center> 

<div class="container">
    <div class="page-header">
        <h1>Componentes del Vehiculo</h1>
    </div>
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
      <p>Es una máquina eléctrica, capaz de generar energía eléctrica a partir de energía mecánica, generalmente obtenida por un mecanismo de arrastre desde un motor de combustión interna, tanto alternativo, como turbina de gas o Wankel. La corriente eléctrica producida es corriente alterna, no necesita sistema de regulación de la intensidad o disyuntor como la dinamo. Sin embargo sí necesita un dispositivo de regulación del voltaje y de rectificación, ya que la corriente usada por los sistemas es normalmente continua y obtenida desde una batería o acumulador
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
      <p>Es un dispositivo construido con un eje cromado y dos tubos de acero (uno dentro del otro). El tubo exterior se denomina tubo de reserva (lleno de aceite). El interno, tubo de compresión. En un extremo, el eje de acero tiene el apoyo que se ancla al vehículo. En el otro extremo se monta un pistón, que siempre se desplaza a lo largo del tubo de compresión, el cual presiona o succiona aceite que fluye a través de válvulas instaladas en el tubo de compresión.
La función del amortiguador es controlar los movimientos de la suspensión, los muelles y/o resortes. El movimiento de la suspensión genera energía cinética, que se convierte en energía térmica o calorífica. Esta energía se disipa a través del aceite.

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
      <p>Elemento de la suspensión constituido por una barra metálica que une las dos ruedas de un mismo eje. No actúa cuando ambas ruedas se desplazan hacia arriba o hacia abajo simultáneamente. Permite tener una suspensión flexible y confortable, aumentando artificialmente la rigidez en curvas. De este modo, las barras estabilizadoras reducen el balanceo, por lo que también se las conoce como barras antibalanceo.
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
// segunda parte

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
      <p> Conocido tambien como Tanque de combustible es un contenedor seguro para líquidos flamables, que forma parte del sistema del motor, y en el cual se almacena el combustible, que es propulsado para que el avion avance. (mediante la bomba de combustible) o liberado (como gas a presión) en un motor. Los depósitos de combustible varían considerablemente de tamaño y complejidad, desde un diminuto depósito de butano para un mechero hasta el depósito externo de combustible criogénico multicámara de un transbordador espacial.

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

Esta corriente convertida en chispa al llegar al electrodo de la bujía produce la combustión de la mezcla que se encuentra comprimida dentro del cilindro al final de la carrera de compresión, haciendo subir la presión en la cámara, empujando al pistón, hacia fuera, produciendo un trabajo útil transmitido a la biela y luego al cigueñal. Esta es la carrera de expansión o de explosión.
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
