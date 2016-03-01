<?php 
include_once(APPPATH.'controllers/PadreController.php');
class Anunciante extends PadreController {
	// metodos 
		function __construct(){
			parent::__construct();
		}
	// URL
		// agrega, eliminar
		// localhost://drivecontrol/index.php/anunciante/index/ 
		function index(){
			$this->load->view("Anunciante/index.php");
		}

		function veranuncio($id,$idUsuario=""){
			$data = array(
				'idAnuncio' => $id,
				'Nombre' => "Rocio"
				);
			$this->load->view("Anunciante/veranuncio.php",$data);
		}
}