<?php
class GastosModel extends CI_Model
{
	
	function __construct()
	{
		# code...
	}
	public function getRepuestos(){
		$sql 	= "SELECT * FROM repuestos";
		$query 	= $this->db->query($sql);
		return $query->result();
	}
	public function agregarGasto($vehiculoRepuesto){
		$sql = "INSERT INTO vehiculos_repuestos 
			values(null,".$vehiculoRepuesto->cbRepuesto.",".$vehiculoRepuesto->cbVehiculo.",".$vehiculoRepuesto->txtMonto.",'".$vehiculoRepuesto->txtFecha."','".$vehiculoRepuesto->txtAreaAdicional."','".$vehiculoRepuesto->txtLocal."')";
		$query = $this->db->query($sql);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	public function obtenerGastos($idVehiculo,$idUsuario){
		$sql = "SELECT vr.*,r.nombre,v.vehiculo
				FROM vehiculos_repuestos vr
				inner join repuestos r
				on r.idRepuesto = vr.id_repuesto_fk
				inner join vw_vehiculo v
				on v.idVehiculo = vr.id_vehiculo_fk
				where
				vr.id_vehiculo_fk = ".$idVehiculo."";
		$query = $this->db->query($sql);
		$retorno = new stdClass();
		$retorno->repuestos = $query->result();
		$sql = "SELECT sum(vr.monto) as total
				FROM vehiculos_repuestos vr
				inner join vw_vehiculo v
				on v.idVehiculo = vr.id_vehiculo_fk
				where v.id_usuario_fk = ".$idUsuario."";
		$query = $this->db->query($sql);
		$retorno->total = $query->result();
		$retorno->total = $retorno->total[0];
		return $retorno;
	}
	public function getVehiculosGastos($idUsuario)
	{
		$sql = "SELECT id as idVehiculo,concat(ma.marca,' ',mo.modelo,' ',v.anio) as imprimir
		FROM vehiculo v
		inner join modelos mo
		on mo.idModelo = v.id_modelo_fk
		inner join marcas ma
		on ma.idMarca = mo.id_marca_fk
		where id_usuario_fk = ".$idUsuario." ";
		$query = $this ->db->query($sql);
		$resultado = $query->result();
		return $resultado;
	}
}