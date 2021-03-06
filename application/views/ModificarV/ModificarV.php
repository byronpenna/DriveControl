<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // estilos universales
  $this->load->view("parts/estilos.php");
  ?>
  <style type="text/css">
    .divRegresar a{
      color: white; 
    }
  </style>

</head>
<body>
<pre>
  <?php print_r($vehiculo); ?> 
</pre>
  <input class="txtHdIdMarca" value=<?php echo $vehiculo->id_marca_fk; ?> ></input>
  <input class="txtHdIdModelo" value=<?php echo $vehiculo->id_modelo_fk ?> ></input>
  <body>
  <div class="container">
    <div class="col-lg-8">
      
    </div>
    <div class="panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-lg-1 divRegresar">
            <a href=<?php echo site_url("menuUsuario/menuUsuario") ?> >Regresar</a>
          </div>
          <div class="col-lg-10">
            <h1 class="text-center">Modificar Vehiculo </h1>
          </div>  
        </div> 
      </div>
     <div class ="panel-body">
      <form action=<?php echo site_url('vehiculos/Modificar_Vehiculo/'.$id)?> method="POST">
      <div class="col-lg-6">
        <h3 class="text-center">Generales</h3>
        <div class="form-group">
          <input type="hidden" class="txtUrlGetModelos" value=<?php echo site_url("vehiculos/ajax_getModelosFromMarca") ?> >
          <label >Marca</label>
          <select class=" form-control combobox cbMarca" name="comboMarca">
            <option value="-1">Seleccione marca</option>
            <?php 
            foreach ($marcas as $key => $marca) {
             ?>
             <option value=<?php echo $marca->idMarca ?>>
              <?php echo $marca ->marca ?> 
              <?php } ?>
            </option>
          </select> 
        </div>
        <div class="form-group">
          <label>Modelo</label>
          
          <select class="form-control cbModelo" name="cbModelo">
            <option value="-1">Seleccione marca para ver modelos</option>
          </select>
        </div>
        <div class="form-group">
          <label >Clase de Vehiculo</label>
          <select class="form-control combobox" name="comboClaseV">
            <?php 
            foreach ($CVehiculo as $key => $clase) {
             ?>
             <option value=<?php echo $clase->id ?>>
              <?php echo $clase ->clase ?> 
              <?php } ?>
            </option>
          </select> 
        </div>
        <div class="form-group">
         <label >Tipo de Vehiculos </label>
          <select class="form-control combobox" name="comboTipoV">
            <?php 
            foreach ($TVehiculo as $key => $tipo) {
              if($tipo->tipo == $vehiculo->id_tipovehiculo_fk){
                $selected = "selected";
              }else{
                $selected = "";
              }
             ?>
             <option <?php echo $selected ?> value=<?php echo $tipo->id ?>>
              <?php echo $tipo ->tipo?> 
              <?php } ?>
            </option>
          </select> 
        </div>
        <div class="form-group">
         <label>Año</label>
          <select class="form-control combobox" name="comboAnio">
          <?php 
          for ($i=1970; $i < 2017; $i++) { 
          ?>
            <option value=<?php echo $i ?> >
              <?php echo $i ?>
              <?php }?>
            </option>
          </select> 
        </div>
          <div class="form-group">
            <input type="text" class="form-control txtMotor" name="txtMotor" placeholder="Nº motor" required value=<?php echo $vehiculo->motor ?> >
          </div>
         <div class="form-group">
          <input type="text" class="form-control" name="txtChasis" placeholder=" Nº Chasis" required value=<?php echo $vehiculo->chasis ?> >
         </div>
      </div>
      <div class="col-lg-6">
        <h3 class="text-center">Componentes</h3>
        <div class="form-group">
          <label >Transmision</label>
          <select class="form-control combobox" name="comboTrans">
            <?php 
            foreach ($Trans as $key => $nombre) {
             ?>
             <option value=<?php echo $nombre->id ?>>
              <?php echo $nombre ->nombre ?> 
              <?php } ?>
            </option>
          </select> 
        </div>
        <div class="form-group">
          <label >Llanta</label>
          <select class="form-control combobox" name="comboLlanta">
              <?php 
              foreach ($ll as $key => $LLANTA) {
               ?>
               <option value=<?php echo $LLANTA->id ?>>
                <?php echo $LLANTA->LLANTA ?> 
              </option>
              <?php 
            } 
            ?>
          </select> 
        </div>
        <div class="form-group">
          <label>Numero de Ring</label>
          <select class="combobox form-control" name="comboRing">
            <?php 
            foreach ($rines as $key => $num_rin) {
             ?>
             <option value=<?php echo $num_rin->id ?>>
              <?php echo $num_rin ->num_rin ?> 
              <?php } ?>
            </option>
          </select> 
        </div>
        <div class="form-group">
          <label > Aceite de Caja</label>
          <select class="form-control combobox" name="comboAceiteC">
            <?php 
            
            foreach ($AceiteC as $key => $nombre) {
              if($nombre->id == $vehiculo->id_aceitecaja_fk){
                $selected = "selected";
              }else{
                $selected = "";
              }
             ?>
              <option <?php echo $selected ?> value=<?php echo $nombre->id ?>>
                <?php echo $nombre ->nombre ?> 
              </option>
            <?php 
            } 
            ?>
          </select>
        </div>

        <div class="form-group">
          <label> Aceite de Motor</label>
          <select class="combobox form-control" name="comboAceiteM">
            <?php 
            foreach ($AceiteM as $key => $nombre) {
              if($nombre->id == $vehiculo->id_aceitemotor_fk){
                $selected = "selected";
              }else{
                $selected = "";
              }
            ?>
              <option <?php echo $selected ?> value=<?php echo $nombre->id ?>>
                <?php echo $nombre ->nombre ?> 
              </option>
             <?php 
             } 
             ?>   
          </select> 
        </div>
        <div class="form-group">
            <label >Combustible</label>         
            <select class="combobox form-control" name="comboCombustible">
              <?php 
                foreach ($combustible as $key => $nombre) {
              ?>
                <option value=<?php echo $nombre->id ?>><!-- Tenias que usar echo -->
                <?php echo $nombre ->nombre ?> 
                </option>
              <?php 
                } 
              ?>
            </select> 
        </div>
      </div>

        




        

        
          


          








</div>
<button class="btn btn-default" type="submit">Modificar Vehiculo</button>  </a>
</form>
</div>
</div>
</div>
  <?php
  $this->load->view("parts/scripts.php");
  ?>
  <script type="text/javascript" src=<?php echo base_url("Content/js/vehiculos/functions.js") ?>></script>
  <script type="text/javascript" src=<?php echo base_url("Content/js/vehiculos/script.js") ?>></script>
</body>
</html>