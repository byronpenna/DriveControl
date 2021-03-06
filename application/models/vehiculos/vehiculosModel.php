<?php 
class VehiculosModel extends CI_Model
{
	function __construct()
	{

	}
	// 
	public function getModelosFromMarca($idMarca){
		$sql = "SELECT * from modelos where id_marca_fk = ".$idMarca."";
		$query = $this ->db->query($sql);
		$resultado = $query->result();
		return $resultado;
	}
	//######################################3
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


		public function VerVehiculo($idUsuario)
	{
	$sql		= "SELECT vehiculo.id,clase_vehiculo.clase, tipos_vehiculos.tipo, marcas.marca, modelos.modelo, vehiculo.anio,transmision.nombre As Transmision, CONCAT(Diametro,'/',grosor) As Llanta, rines.num_rin, vehiculo.chasis, vehiculo.motor, combustible.nombre As Combustible, aceite_caja.nombre As Aceite_Caja, aceite_motor.nombre As Aceite_Motor from vehiculo inner join tipos_vehiculos on vehiculo.id_tipovehiculo_fk=tipos_vehiculos.id inner join clase_vehiculo on tipos_vehiculos.id_clasevehiculo_fk=clase_vehiculo.id inner join transmision on vehiculo.transmision=transmision.id inner join llantas on vehiculo.id_llanta_fk=llantas.id inner join rines on vehiculo.id_rin_fk=rines.id inner join combustible on vehiculo.id_combustible=combustible.id inner join aceite_caja on vehiculo.id_aceitecaja_fk=aceite_caja.id inner join aceite_motor on vehiculo.id_aceitemotor_fk=aceite_motor.id inner join modelos on vehiculo.id_modelo_fk=modelos.idModelo inner join marcas on modelos.id_marca_fk=marcas.idMarca where id_usuario_fk='".$idUsuario. "'";
	$query 		= $this ->db->query($sql);
	$resultado 	= $query ->result();
	return $resultado;
	}
	public function getDataVehiculoById($id){
		$sql 	= "SELECT *,m.id_marca_fk 
					FROM vehiculo v
					inner join modelos m
					on v.id_modelo_fk = m.idModelo where id = ".$id."";
		$query 	= $this ->db->query($sql);
		return $query->result();
	}
	public function Regis_Vehiculo($CVehiculo, $TVehi, $modelo, $Anio, $Transmision, $Llanta, $NRing, $NMotor, $NChasis, $Combus, $AceiteCa, $AceiteMo,$idUsuario)
	{
		$sql= "INSERT INTO vehiculo VALUES (null,'".$Transmision. "','".$TVehi. "','".$NRing. "','" .$Llanta."','".$AceiteCa. "','".$AceiteMo. "',".$idUsuario.",'".$Anio. "','".$NMotor. "','".$Combus. "','".$NChasis. "','".$modelo. "')";
		$query = $this ->db->query($sql);
	}

	public function Modifi_Vehiculo($id, $CVehiculo, $TVehi, $modelo,  $Anio, $Transmision, $Llanta, $NRing, $NMotor, $NChasis, $Combus, $AceiteCa, $AceiteMo,$idUsuario)
	{
		$sql= "UPDATE `vehiculo` SET `transmision`='".$Transmision. "',`id_tipovehiculo_fk`='".$TVehi. "',`id_rin_fk`='".$NRing. "',`id_llanta_fk`='" .$Llanta."',`id_aceitecaja_fk`='".$AceiteCa. "',`id_aceitemotor_fk`='".$AceiteMo. "',`id_usuario_fk`='".$idUsuario."',`anio`='".$Anio. "',`motor`='".$NMotor. "',`id_combustible`='".$Combus. "',`chasis`='".$NChasis. "',`id_modelo_fk`='".$modelo. "' WHERE `id`='".$id. "'";
		$query = $this ->db->query($sql);

	}
	public function EliminarVehiculo($id,$idUsuario)
	{
	$sql= "DELETE FROM vehiculo WHERE id='".$id. "' and id_usuario_fk='".$idUsuario. "'";
	$query = $this ->db->query($sql);
	}
}