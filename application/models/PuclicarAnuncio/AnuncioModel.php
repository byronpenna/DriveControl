<?php 
class AnuncioModel extends CI_Model
{
	function __construct()
	{

	}
	public function ObtenerTipo()
	{
	$sql= "SELECT idTipoAnuncio,CONCAT(tipo,' / $',precio) As Anuncio FROM tipos_anuncios";
	$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;	
	}
	public function Select_anunciante($idUsuario)
	{
		$sql="SELECT idAnunciante from anunciantes where id_usuario_fk=".$idUsuario."";
		$query = $this ->db->query($sql);
	$resultado= $query ->result();
	return $resultado;	
	}
	public function IngresarAnuncio($TituloAnuncio,$DescripAnuncio,$TipoAnuncio,$FInicio,$Ffin,$URLAnuncio,$rut,$idAnunciante)
	{
		
		$sql="INSERT INTO anuncios VALUES (null,'".$idAnunciante."','".$TituloAnuncio."','".$DescripAnuncio."','".$TipoAnuncio."','".$rut."','".$URLAnuncio."','".$FInicio."','".$Ffin."')";
		$query=$this->db->query($sql);
		$retorno = new stdClass();
		if($query){
			$retorno->estado =	true;
		}else{
			$retorno->estado =  false;
		}
		$retorno->idInsert = $this->db->insert_id();
		return $retorno;

	}
}