<?php /**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/PadreController.php');
class controlvehiculo extends PadreController {

	private $model;
	function __construct()
	{
		parent::__construct();
		$this->load ->model('controlvehiculo/controlModel');
		$this ->model = new controlModel();
	}

	public function controlvehiculo()
	{
		$marcas = $this ->model->MostrarMarca();
		$rines = $this ->model->MostrarRin();
		$ll = $this ->model->MostrarLlantas();
		$CVehiculo = $this ->model->MostrarClaseVehiculos();
		$TVehiculo = $this ->model->MostrarTipoVehiculo();
		$vehiculo = $this ->model ->MostrarVehiculo();
		$data = array("vehiculo" => $vehiculo ,"marcas" => $marcas , "rines" => $rines, "ll" => $ll , "CVehiculo" => $CVehiculo ,"TVehiculo" => $TVehiculo);
		$this ->load ->view('controlvehiculo/controlvehiculo.php',$data);
	}
}