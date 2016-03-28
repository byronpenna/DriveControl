<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vehículo eliminado</title>
</head>
<body>
	<div align="center">
<font color="FF0000"> El vehículo se ha eliminado exitosamente </font>
	</div>

<?php
$id = $_POST['id']; 

$query = "delete from $vehiculo where id = '$id'";  
$result = mysql_query($query);  
echo "

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p> 

";

?>

</body>
</html>