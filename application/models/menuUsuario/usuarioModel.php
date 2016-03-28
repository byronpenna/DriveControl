<?php

class controlModel extends CI_Model
{
	function __construct()
	{

	}

	public function MostrarNombre()
	{
		$sql= "SELECT nombres from personas";
		$query = $this ->db ->query($sql);
		$resultado= $query ->result();
		return $resultado;
	}

	public function MostrarApellido()
	{
		$sql= "SELECT apellidos from personas";
		$query = $this ->db ->query($sql);
		$resultado= $query ->result();
		return $resultado;
	}

	public function MostrarFecha()
	{
		$sql= "SELECT fecha_nacimiento from personas";
		$query = $this ->db ->query($sql);
		$resultado= $query ->result();
		return $resultado;
	}

	public function MostrarCorreo()
	{
		$sql= "SELECT correo from personas";
		$query = $this ->db ->query($sql);
		$resultado= $query ->result();
		return $resultado;
	}

}

?>