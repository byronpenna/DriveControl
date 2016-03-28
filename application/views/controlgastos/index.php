<!DOCTYPE html>
<html>
<head>
  <title> Control de gastos</title>
  <?php
 
     // estilos universales -->
      $this->load->view("parts/estilos.php");
  ?>

    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/controlgastos/style.css") ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/controlgastos/media.css") ?>>



<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<center> 
                     <img  WIDTH=1500, HEIGTH=1000 src=<?php echo base_url("Content\img\controlg.jpg" ) ?>>
 </center> 

<br>
<br>
<br>

<div class="container">
	<div class="row">
        <div class="table-responsive col-md-12">
        <table id="sort2" class="grid table table-bordered table-sortable">
            <thead>
                <tr><th>id</th><th>Detalle</th><th>Precio</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><input type="text" value="" class="form-control"></td>
                    <td><input type="text" value="" class="form-control"></td>
                    <td><button class="btn btn-primary glyphicon glyphicon-remove"></button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="text" value="" class="form-control"></td>
                    <td><input type="text" value="" class="form-control"></td>
                    <td><button class="btn btn-primary glyphicon glyphicon-remove"></button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input type="text" value="" class="form-control"></td>
                    <td><input type="text" value="" class="form-control"></td>
                    <td><button class="btn btn-primary glyphicon glyphicon-remove"></button></td>
                </tr>
            </tbody>
        </table>
        </div>
        </div>
        </div>