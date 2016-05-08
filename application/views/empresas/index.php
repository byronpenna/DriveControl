 <!DOCTYPE html>
<html>
<head>
    <!-- estilos personalizados -->
    <?php
      // estilos universales
        $this->load->view("parts/estilos.php");
   
  ?>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/principal/stile.css")?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/empresas/style.css") ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/empresas/media.css") ?>>

    <title>Empresas Asociadas</title>
</head>
<body>
  <header>
    <?php 
      $this->load->view("parts/menu.php");

    ?>
  </header>
 
  
 
  
<div class="row contentImg">
  
 <img  class="imgPromo" src=<?php echo base_url("Content/img/empresas.jpg") ?>>

 <img class="imgPromo"  src=<?php echo base_url("Content/img/nuestrosproductos.jpg") ?>>
  
</div>


  <?php
    $this->load->view("parts/scripts.php");
  
    $this->load->view("parts/footer.php");

  ?>
<br>
<br>
<br>

  
</body>
</html>
    