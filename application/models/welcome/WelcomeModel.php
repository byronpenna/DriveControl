<?php 
class WelcomeModel extends CI_Model
{
	function __construct()
	{
		
	}
	public function registrarUsuario($frm){
		$sql 		= "insert into personas values(null,'".$frm->txtNombres."','".$frm->txtApellidos."',".$frm->txtNacimiento.")";
		$query 		= $this->db->query($sql);
		$idPersona 	= $this->db->insert_id();
		$sql 		= "insert into usuarios values(null,'".$frm->txtUsuario."', md5('".$frm->txtPass."'),".$idPersona.",2)";
		$flag = $this->db->query($sql);
		return $flag;
	}
}