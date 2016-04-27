<!DOCTYPE html>
<html>
<head>
	<title>Registrar anunciante</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
</head>
<body>

<!-- <pre>
	<?php print_r($anunciantes) ?>
</pre> -->
<div class="col-lg-4">
	<form action=<?php echo site_url("Anunciante/guardarAnunciante") ?> method='post' >
		<div class="form-group">
			<label>Usuario</label>
			<select class="cbUsuario form-control" name="cbUsuario">
				<?php 
					foreach ($usuarios as $key => $usuario) {
				?>
					<option value=<?php echo $usuario->idUsuario ?> ><?php echo $usuario->usuario ?> </option>
				<?php 
					}
				?>
			</select>
		</div>
		<div class="form-group">
			<label>Nombre de anunciante</label>
			<input type="text" class="form-control" name="txtNombreAnunciante" ></input>
		</div>
		<div class="form-group">
			<button class="btn btn-default">Ingresar</button>

		</div>
	</form>	
</div>

<table class="table">
	<thead>
		<tr>
			<th>Anunciante</th>
			<th>Usuario</th>
		</tr>	
	</thead>
	<tbody>
		<?php 
			foreach ($anunciantes as $key => $anunciante) {
		?>
			<tr>
				<td class="hidden">
					<input class="txtHdIdAnunciante" value=<?php echo $anunciante->idAnunciante ?> ></input>
				</td>
				<td><?php echo $anunciante->anunciante ?></td>
				<td><?php echo $anunciante->usuario ?></td>
				<td>
					<a href=<?php echo site_url("Anunciante/eliminarAnunciante/".$anunciante->idAnunciante) ?> class="btn btn-default">
						Eliminar
					</a>
				</td>
			</tr>
		<?php 
			}
		?>
	</tbody>
</table>
</body>
</html>