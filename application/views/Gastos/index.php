<!DOCTYPE html>
<html>
<head>
	<title>Gastos</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
</head>
<body>
	  <div class="container">
    <div class="panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-lg-1 divRegresar">
           <a href=<?php echo site_url("MenuUsuario/menuUsuario") ?>> <img src=<?php echo base_url("Content/img/rperfil.jpg") ?> alt=""/> </a>
          </div>
          <div class="col-lg-10">
          	<br>
            <h1 class="text-center">Control de gastos</h1>
          </div>  
        </div> 
      </div>
		<div class="row ">
		<center><div class="col-lg-3 divCbVehiculo"></div>
			<div class="col-md-6">
				<br>
				<br>
				<br>


<body background=C:\xampp\htdocs\DriveControl\application\views\vehiculos\1e.jpg >

	<div class="row marginNull">
		<div class="col-lg-6 divCbVehiculo">
			

			<input type="hidden" class="txtHdCbVehiculoChange" value=<?php echo site_url("Gastos/ajax_obtenerGastos") ?> ></input>
			<select class="form-control cbVehiculo">
				<option value="-1"> Seleccione su vehiculo</option>
				<?php 
					foreach ($vehiculos as $key => $vehiculo) {
				?>
					<option value=<?php echo $vehiculo->idVehiculo ?>><?php echo $vehiculo->imprimir ?> </option>
				<?php
					}
				?>
			</select>
		</div></center>
	</div>
	<div class="panel-body">
	<div class="row marginNull">
		<div class="col-lg-3"></div>
		<div class="col-md-6">
			<center><h2>Agregar gasto</h2></center>
			<form class="frmRepuesto" action=<?php echo site_url("Gastos/ajax_ingresarGasto") ?> >
				<div class="form-group">
					<label>Repuesto</label>
					<select class="form-control cbRepuesto" name="cbRepuesto">
						<option value="-1">Seleccione un repuesto</option>
						<?php 
						foreach ($repuestos as $key => $repuesto) {
						?>
							<option value=<?php echo $repuesto->idRepuesto ?> > <?php echo $repuesto->nombre ?> </option>
						<?php 
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Monto</label>
					<input class="txtMonto form-control" name="txtMonto"></input>
				</div>
				<div class="form-group">
					<label>Fecha</label>
					<input class="txtFecha form-control" name="txtFecha"></input>
				</div>
				<div class="form-group">
					<label>Detalles adicionales</label>
					<textarea  class="txtAreaAdicional form-control" name="txtAreaAdicional"></textarea >
				</div>
				<div class="form-group">
					<label>Local</label>
					<input class="txtLocal form-control" name="txtLocal"></input>
				</div>
				<center><div class="form-group">
					<button class="btn btn-primary">Agregar</button>
				</div></center>
			</form>	
		</div>
	</div>
	</div>
	<div class="panel-footer">
	<div class="marginNull row">
		<h4>Total gastado: </h4>
		$ <span class="lbTotalGasto"></span>
	</div>
	</div>
	<br>
	<br>
</div>
	<table class="table">
		<thead>
			<tr>
				<th>Repuesto</th>
				<th>Costo</th>
				<th>Descripción</th>
				<th>Fecha compra</th>
				<th>Local</th>
			</tr>
		</thead>
		<tbody class="tbRepuestos">
			
		</tbody>
	</table>
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("Content/js/gastos/functions.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/gastos/script.js") ?>></script>

</body>
</html>