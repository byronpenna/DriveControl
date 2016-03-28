<?php 
class controlModel extends CI_Model
{
	function __construct()
	{

	}

	public function MostrarVehiculo()
	{
		$sql= "SELECT id, anio, motor from vehiculo";
		$query = $this ->db ->query($sql);
		$resultado= $query ->result();
		return $resultado;
	}

	public function MostrarMarca()
	{
	$sql= "SELECT * from marcas";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

	public function MostrarRin()
	{
	$sql= "SELECT * from rines";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

	public function MostrarLlantas()
	{
	$sql= "SELECT CONCAT(Diametro,'/',grosor) As LLANTA FROM llantas";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

	public function MostrarClaseVehiculos()
	{
	$sql= "SELECT * FROM clase_vehiculo";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

	public function MostrarTipoVehiculo()
	{
	$sql= "SELECT * FROM tipos_vehiculos";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

	public function EliminarVehiculo()
	{
		
	}
}
?>