<?php 
class VehiculosModel extends CI_Model
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
	public function IngresarLlantas()
	{

		//AQUI LE PUSE EL ID
	$sql= "SELECT id,CONCAT(Diametro,'/',grosor) As LLANTA FROM llantas";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

	public function IngresarClaseVehiculos()
	{
	$sql= "SELECT * FROM clase_vehiculo";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}
	public function IngresarTipoVehiculo()
	{
	$sql= "SELECT * FROM tipos_vehiculos";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

		public function IngresarAceiteC()
	{
	$sql= "SELECT * FROM aceite_caja";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

		public function IngresarAceiteM()
	{
	$sql= "SELECT * FROM aceite_motor";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}
	public function IngresarTransmision()
	{
	$sql= "SELECT * FROM transmision";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

		public function IngresarMotor()
	{
	$sql= "SELECT motor from vehiculo";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}
		public function IngresarChasis()
	{
	$sql= "SELECT chasis FROM vehiculo";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}
		public function IngresarCombustible()
	{
	$sql= "SELECT * FROM combustible";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

		public function VerVehiculo()
	{
	$sql= "SELECT * FROM vehiculo WHERE 1";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;
	}

	public function Regis_Vehiculo($CVehiculo, $TVehi, $Marca, $Anio, $Transmision, $Llanta, $NRing, $NMotor, $NChasis, $Combus, $AceiteCa, $AceiteMo,$idUsuario)
	{
		$sql= "INSERT INTO vehiculo VALUES (null,'".$Transmision. "','".$TVehi. "','".$Marca. "','".$NRing. "','" .$Llanta."','".$AceiteCa. "','".$AceiteMo. "',".$idUsuario.",'".$Anio. "','".$NMotor. "','".$Combus. "','".$NChasis. "')";
		$query = $this ->db->query($sql);
	}

	public function Modifi_Vehiculo($idVehiculo, $CVehiculo, $TVehi, $Marca, $Anio, $Transmision, $Llanta, $NRing, $NMotor, $NChasis, $Combus, $AceiteCa, $AceiteMo,$idUsuario)
	{
		$sql= "UPDATE `vehiculo` SET `transmision`='".$Transmision. "',`id_tipovehiculo_fk`='".$TVehi. "',`id_marca_fk`='".$Marca. "',`id_rin_fk`='".$NRing. "',`id_llanta_fk`='" .$Llanta."',`id_aceitecaja_fk`='".$AceiteCa. "',`id_aceitemotor_fk`='".$AceiteMo. "',`id_usuario_fk`=".$idUsuario.",`anio`='".$Anio. "',`motor`='".$NMotor. "',`id_combustible`='".$Combus. "',`chasis`='".$NChasis. "' WHERE `id`='".$idVehiculo. "' ";
		$query = $this ->db->query($sql);

	}
}