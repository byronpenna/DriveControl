<?php 
class menuUsuarioModel extends CI_Model
{
	function __construct()
	{

	}
	//
	public function getdatosUsuario($usuario){
		$sql = "SELECT
				u.usuario,
				p.nombres,
				p.apellidos,
				p.correo_electronico,
				p.fecha_nacimiento,
				from usuarios us
				inner join usuarios us ON u.usuario=$usuario
				INNER join personas p on us.id_persona_fk=p.idPersona";
		$query = $this ->db->query($sql);
		$resultado = $query->result();
		return $resultado;
	}
}