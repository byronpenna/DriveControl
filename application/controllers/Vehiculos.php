<?php
include_once(APPPATH.'controllers/PadreController.php');
class Vehiculos extends PadreController {
	// url
		public function index(){
			//echo "vehiculos";
			$vehiculo = new stdClass();
			$vehiculo->nombre = "Toyota";
			//$vehiculos = new array();
			$vehiculos[0] =$vehiculo;
			//---------------------------------------
			$data =array('vehiculos' => $vehiculos,"nombrePersona" => "Jen" );
			$this->load->view("vehiculos/index.php",$data);
		}
}