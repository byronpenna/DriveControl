<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vehiculos</title>
</head>
<body>
	<h2>adqweqw</h2>
	<?php
		foreach ($vehiculos as $key => $vehiculo) {
	?>
		<tr>
			<td><?php echo $vehiculo->nombre ?> </td>
		</tr>
	<?php
		 } 
	?>
</body>
</html>