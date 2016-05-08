<?php 
	if($editando){
		
		$botonPrincipal = "Guardar";
		$urlAction		= site_url("Marca/GuardarModificacion");
	}else{
		$urlAction 		= site_url("Marca/IngresarMarca");
		$botonPrincipal = "Ingresar";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ver marcas</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
	<!-- estilos personalizados -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Marca/marcas/style.css") ?>>
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Marca/marcas/media.css") ?>>
</head>
<body>
	
	<div class="row"> 
		<div class="col-lg-4">
			<form action=<?php echo $urlAction ?> class="frm" method="post">
				<input type="hidden" name="txtHdIdMarca" value=<?php echo $marcaEdit->idMarca ?>></input>
				<div class="form-group">
					<label>Marca</label>	
					<input class="form-control" name="txtMarca" value=<?php echo $marcaEdit->marca ?> ></input>
				</div>
				<div class="form-group">	
					<button type="submit" class="btn btn-default">
						<?php 
							echo $botonPrincipal;
						?>
					</button>
					<?php 
						if($editando){
					?>
						<a href=<?php echo site_url("Marca/Marcas") ?> class="btn btn-default">Cancelar</a>
					<?php 
						}
					?>
				</div>		
				<div class="divMessageResult">
					<?php echo $mjs ?>
				</div>
			</form>		
		</div>
	</div>
	
	<table class="table">
		<thead>
			<tr>
				<th>Marca</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($marcas as $key => $marca) {
					if( $marca->idMarca == $marcaEdit->idMarca){
						$trClass = "trEdit";
					}else{
						$trClass = "";
					}
			?>

				<tr class=<?php echo $trClass ?> >
					<td><?php echo $marca->marca  ?></td>
					<td>
						<div class="btn-group">
							<a href=<?php echo site_url("Marca/ModificarMarca/".$marca->idMarca) ?> class="btn btn-default">Editar</a>
							<a href=<?php echo site_url("Marca/EliminarMarca/".$marca->idMarca) ?> class="btn btn-default">Eliminar</a>	
						</div>
					</td>
				</tr>
			<?php 		
				}
			?>
			
		</tbody>
	</table>
	<?php
		$this->load->view("parts/scripts.php");
	?>

	 <br><br><br><br><br><br>
  <footer id="pie">
    
    <span><strong>UDB - Analisis y Diseño de sistemas</strong></span>
        <span><font size=2 style="color:#9A9A9A";><i>&copy; [DERECHOS RESERVADOS LJBFE ] &reg;</i></font></span>

  </footer>

  <script type="text/javascript" src=<?php echo base_url("Content/js/Principal/script.js")?>></script>
</body>
</html>