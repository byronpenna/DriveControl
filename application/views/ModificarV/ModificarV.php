<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // estilos universales
  $this->load->view("parts/estilos.php");
  ?>


</head>
<body>


  <br>
  <br>
  <div class="container">
    <div class="panel-primary">
      <div class="panel-heading"> 
       <center> <h1> Modificar datos del Vehiculo </h1></center>
     </div>
     <div class ="panel-body">
      <form action=<?php echo site_url("vehiculos/Modificar_Vehiculo"); ?> method="POST">
<?php echo "El id es : ".$id ?>

        <center><div class="form-group"></center>
        <center> <label >ID VEHICULO</label></center>
       <?php echo $id ?>
		 </center></div>



        <center><div class="form-group"></center>
        <center> <label >Clase de Vehiculo</label></center>
        <center><select class="combobox" name="comboClaseV">
          <?php 
          foreach ($CVehiculo as $key => $clase) {
           ?>
           <option value=<?php echo $clase->id ?>>
            <?php echo $clase ->clase ?> 
            <?php } ?>
          </option>
        </select> </center></div>


        <center><div class="form-group"></center>
        <center> <label >Tipo de Vehiculos </label></center>
        <center><select class="combobox" name="comboTipoV">
          <?php 
          foreach ($TVehiculo as $key => $tipo) {
           ?>
           <option value=<?php echo $tipo->id ?>>
            <?php echo $tipo ->tipo?> 
            <?php } ?>
          </option>
        </select> </center></div>

        <center><div class="form-group"></center>
        <center> <label >Marca</label></center>
        <center><select class="combobox" name="comboMarca">
          <?php 
          foreach ($marcas as $key => $marca) {
           ?>
           <option value=<?php echo $marca->idMarca ?>>
            <?php echo $marca ->marca ?> 
            <?php } ?>
          </option>
        </select> </center></div>

        <center><div class="form-group"></center>
        <center> <label >Año</label></center>
        <center><select class="combobox" name="comboAnio">
          <?php 
          for ($i=1970; $i < 2017; $i++) { 
            ?>
            <option value=<?php echo $i ?>>
              <?php echo $i ?>
              <?php }?>
            </option>
          </select> </center></div>
          <br>

          <center><div class="form-group"></center>
          <center> <label >Transmision</label></center>
          <center><select class="combobox" name="comboTrans">
            <?php 
            foreach ($Trans as $key => $nombre) {
             ?>
             <option value=<?php echo $nombre->id ?>>
              <?php echo $nombre ->nombre ?> 
              <?php } ?>
            </option>
          </select> </center></div>



          <center><div class="form-group"></center>
          <center> <label >Llanta</label></center>
          <center>

          <select class="combobox" name="comboLlanta">
            <?php 
            foreach ($ll as $key => $LLANTA) {
             ?>
              <option value=<?php echo $LLANTA->id ?>>
                <?php echo $LLANTA->LLANTA ?> 
              </option>
            <?php 
            } 
            ?>
          
        </select> </center></div>

        <center><div class="form-group"></center>
        <center> <label>Numero de Ring</label></center>
        <center><select class="combobox" name="comboRing">
          <?php 
          foreach ($rines as $key => $num_rin) {
           ?>
           <option value=<?php echo $num_rin->id ?>>
            <?php echo $num_rin ->num_rin ?> 
            <?php } ?>
          </option>
        </select> </center></div>
        <br>


        <div class="form-group">

         <center> <input type="text" class="form-control txtMotor" name="txtMotor" 
           placeholder="Nº motor" required></center>
         </div>

         <br>
         <div class="form-group">

          <center><input type="text" class="form-control" name="txtChasis" 
           placeholder=" Nº Chasis" required></center>
         </div>



         <center><div class="form-group"></center>
         <center> <label >Combustible</label></center>
         <center><select class="combobox" name="comboCombustible">
          <?php 

foreach ($combustible as $key => $nombre /*este 
  es el elemento combustible individual por eso es el que ocupo abajo*/ ) {
   ?>
   <option value=<?php echo $nombre->id ?>><!-- Tenias que usar echo -->
    <?php echo $nombre ->nombre ?> 
    <?php } ?>
  </option>
</select> </center></div>


<center><div class="form-group"></center>
<center> <label > Aceite de Caja</label></center>
<center><select class="combobox" name="comboAceiteC">
  <?php 
  foreach ($AceiteC as $key => $nombre) {
   ?>
   <option value=<?php echo $nombre->id ?>>
    <?php echo $nombre ->nombre ?> 
    <?php } ?>
  </option>
</select> </center></div>

<center><div class="form-group"></center>
<center> <label> Aceite de Motor</label></center>
<center><select class="combobox" name="comboAceiteM">
  <?php 
  foreach ($AceiteM as $key => $nombre) {
   ?>
   <option value=<?php echo $nombre->id ?>>
    <?php echo $nombre ->nombre ?> 
    <?php } ?>
  </option>
</select> </center></div>
<br>

<br>

<center><button type="submit" class="btn btn-primary">Modificar Vehiculo</button></center>
      </div>
<br>
<br>
</form>
</div>
</div>
</div>

<?php
$this->load->view("parts/scripts.php");
?>
</body>
</html>