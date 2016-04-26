<?php 
include_once(APPPATH.'controllers/PadreController.php');
class Marca extends PadreController
{
	private $_model;
	function __construct()
	{
		parent::__construct();
		$this->load->model("Marcas/MarcaModel");
		$this->_model = new MarcaModel();
	}
	private function getResultados($idMjs){
		switch ($idMjs) {
			case 1:
				$mjs = "Ocurrio un error ingresando la marca";
				break;
			case 2:
				$mjs = "Ocurrio un error al eliminar una marca";
				break;	
			case 3:
				$mjs = "Ocurrio un error al actualizar marca";
				break;	
			default:
				$mjs = "";
				break;
		}
		return $mjs;
	}
	// resultados url
		//function 
		function Marcas($idMjs=-1){
			$marcas 			= $this->_model->verMarcas();
			$mjs 				= $this->getResultados($idMjs);
			$marcaEdit 			= new stdClass();
			$marcaEdit->marca 	= "";
			$marcaEdit->idMarca = -1;
			$data 	= array(
				'marcas' 	=> $marcas,
				'mjs' 		=> $mjs,
				'marcaEdit' => $marcaEdit,
				"editando"	=> false
			);
			$this->load->view("Marca/Marca.php",$data);
		}
		function ModificarMarca($id=-1,$idMjs=-1)
		{
			$marcas 	= $this->_model->verMarcas();
			$mjs 		= $this->getResultados($idMjs);
			$marcaEdit 	= $this->_model->getMarcaById($id);
			$data 	= array(
				'marcas' 	=> $marcas,
				'mjs' 		=> $mjs,
				'marcaEdit' => $marcaEdit[0],
				"editando"	=> true
			);
			$this->load->view("Marca/Marca.php",$data);	
		}
		function GuardarModificacion(){
			$marca 			= new stdClass();
			$marca->idMarca = $_POST["txtHdIdMarca"];
			$marca->marca 	= $_POST["txtMarca"];
			$respuesta = $this->_model->guardarModificacion($marca);
			if($respuesta){
				redirect("Marca/marcas","refresh");
			}else{
				redirect("Marca/marcas/3","refresh");
			}
		}
		function EliminarMarca($id)
		{
			$respuesta = $this->_model->eliminarMarca($id);
			if($respuesta){
				redirect("Marca/marcas","refresh");
			}else{
				redirect("Marca/marcas/2","refresh");
			}
		}
		function IngresarMarca(){
			//print_r($_POST);
			$marca 			= new stdClass();
			$marca->marca 	= $_POST["txtMarca"];
			$respuesta = $this->_model->ingresarMarca($marca);
			if($respuesta){
				redirect("Marca/Marcas/","refresh");
			}else{
				redirect("Marca/marcas/1","refresh");
			}
		}
}