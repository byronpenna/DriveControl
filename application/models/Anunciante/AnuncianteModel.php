 <?php

class AnuncianteModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}
	function getAnunciantes(){
		$sql ="SELECT a.*,u.usuario FROM anunciantes a inner join usuarios u on u.idUsuario = a.id_usuario_fk";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function guardarAnunciante($anunciante){
		$sql = "INSERT into anunciantes values(null,'".$anunciante->anunciante."',".$anunciante->idUsuario.")";
		$query = $this->db->query($sql);

		$sql = "UPDATE usuarios SET id_rol_fk = 3 where idUsuario = ".$anunciante->idUsuario."";
		$query = $this->db->query($sql);

		if($query){
			return true;
		}else{
			return false;
		}

	}
	function eliminarAnunciante($idUsuario){
		$sql = "DELETE from anunciantes where id_usuario_fk = ".$idUsuario."";
		$query = $this->db->query($sql);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	function getUsuarios(){
		$sql = "SELECT * from usuarios ";
		$query = $this->db->query($sql);
		return $query->result();
	}
}