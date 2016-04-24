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
	public function IngresarAnuncio($TituloAnuncio,$DescripAnuncio,$TipoAnuncio,$FInicio,$Ffin,$URLAnuncio,$rut)
	{
		$sql="INSERT INTO anuncios VALUES (null,1,'".$TituloAnuncio."','".$DescripAnuncio."','".$TipoAnuncio."','".$rut."','".$URLAnuncio."','".$FInicio."','".$Ffin."')";
		$query=$this->db->query($sql);

	}
}