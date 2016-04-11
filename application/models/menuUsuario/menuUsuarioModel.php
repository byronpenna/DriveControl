<?php 
class menuUsuarioModel extends CI_Model
{
	function __construct()
	{
		

	}
	//
	public function getdatosUsuario($usuario){
		$sql = "SELECT
				us.usuario,				
				per.nombres,
				per.apellidos,
				per.correo_electronico,
				per.fecha_nacimiento
				FROM personas per				
				INNER JOIN usuarios us on per.idPersona=us.id_persona_fk 
				where idUsuario=".$usuario."";
		$query = $this ->db->query($sql);
		$resultado = $query->result();
		return $resultado;
		
	}
	public function getnombres($usuario)
	{
		$sql="SELECT nombres FROM personas per INNER JOIN usuarios us on per.idPersona=us.id_persona_fk where usuario='.$usuario.'";
		$query = $this ->db->query($sql);
		$resultado = $query->result();
		return $resultado;
	}
	public function getapellidos($usuario)
	{
		$sql="SELECT apellidos FROM personas per INNER JOIN usuarios us on per.idPersona=us.id_persona_fk where usuario='.$usuario.'";
		$query = $this ->db->query($sql);
		$resultado = $query->result();
		return $resultado;
	}
}