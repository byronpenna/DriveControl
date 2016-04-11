<?php
class GastosModel extends CI_Model
{
	
	function __construct()
	{
		# code...
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