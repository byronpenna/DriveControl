<?php 

class MarcaModel extends CI_Model
{
	
	function __construct()
	{
		
	}
	function verMarcas(){
		$sql 	= "SELECT * FROM `marcas`";
		$query 	= $this->db->query($sql);
		$marcas = $query->result();
		return $marcas; 
	}
	function getMarcaById($idMarca)
	{
		$sql 	= "SELECT * from marcas where idMarca =".$idMarca." ";
		$query 	= $this->db->query($sql);
		$marca 	= $query->result();
		return $marca;
	}
	function guardarModificacion($marca){
		$sql 	= "UPDATE marcas set marca = '".$marca->marca."' where idMarca =".$marca->idMarca."";
		$query 	= $this->db->query($sql);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	function eliminarMarca($idMarca){
		$sql = "DELETE from marcas where idMarca = ".$idMarca."";
		$query = $this->db->query($sql);
		if($query){
			return true;
		}
	}
	function ingresarMarca($marca){
		$sql = "INSERT into marcas values(null,'".$marca->marca."')";
		$query = $this->db->query($sql);
		if($query){
			return true;
		}else{
			return false;
		}
	}
}