<?php 
class WelcomeModel extends CI_Model
{
	function __construct()
	{
		
	}
	public function loguear($frm){
		// vars 
			$sql = "SELECT * 
					FROM `usuarios` u
					inner join personas p
					on p.idPersona = u.id_persona_fk
					WHERE usuario = '".$frm->txtUsuario."' and pass = md5('".$frm->txtPass."') || (p.correo = '".$frm->txtUsuario."' and u.pass = md5('".$frm->txtPass."'))
					";
		// do it 
			$retorno 	= new stdClass();
			$query 		= $this->db->query($sql);
			$resultado 	= $query->result();
			$cn 		= $query->num_rows();
		if($cn > 0){
			$retorno->estado 	= true;
			$retorno->usuario 	= $resultado[0];
		}else{
			$retorno->estado = false;
			$retorno->error = new stdClass();
			$retorno->error->mensaje = "Error en usuario o contraseña";
		}
		return $retorno;
	}
	public function registrarUsuario($frm){
		$sql 		= "insert into personas values(null,'".$frm->txtNombres."','".$frm->txtApellidos."','".$frm->txtNacimiento."','".$frm->txtEmail."')";
		$query 		= $this->db->query($sql);
		$idPersona 	= $this->db->insert_id();
		$sql 		= "insert into usuarios values(null,'".$frm->txtUsuario."', md5('".$frm->txtPass."'),".$idPersona.",2)";
		$flag = $this->db->query($sql);
		return $flag;
	}
}