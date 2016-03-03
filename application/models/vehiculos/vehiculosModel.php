<?php 
class vehiculosModel extends CI_Model
{
	function __construct()
	{

	}

	public function IngresarMarca()
	{
	$sql= "SELECT * from marcas";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

		public function IngresarRin()
	{
	$sql= "SELECT * from rines";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}
}