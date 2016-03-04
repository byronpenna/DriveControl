<?php /**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/PadreController.php');
class vehiculos extends PadreController {

	private $model;
	function __construct()
	{
		parent::__construct();
		$this->load ->model('vehiculos/vehiculosModel');
		$this ->model = new vehiculosModel();
	}

	public function vehiculos()
	{
		$marcas = $this ->model->IngresarMarca();
		$rines = $this ->model->IngresarRin();
		$data = array("marcas" => $marcas , "rines" => $rines);
		$this ->load ->view('vehiculos/vehiculos.php',$data);
	}
}