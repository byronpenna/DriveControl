<?php /**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/PadreController.php');
class Vehiculos extends PadreController {

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
		$ll = $this ->model->IngresarLlantas();
		$CVehiculo = $this ->model->IngresarClaseVehiculos();
		$TVehiculo = $this ->model->IngresarTipoVehiculo();
		$AceiteC = $this ->model->IngresarAceiteC();
		$AceiteM = $this ->model->IngresarAceiteM();
		$Trans = $this ->model->IngresarTransmision();
		$combustible = $this ->model->IngresarCombustible();
		$data = array("marcas" => $marcas , "rines" => $rines, "ll" => $ll , "CVehiculo" => $CVehiculo ,"TVehiculo" => $TVehiculo, "AceiteC" => $AceiteC, "AceiteM" => $AceiteM, "Trans" => $Trans, "combustible" => $combustible);
		$this ->load ->view('vehiculos/vehiculos.php',$data);
	}
	public function registrar_Vehiculo()
	{
		$CVehiculo = $_POST["comboClaseV"];
		$TVehi = $_POST["comboTipoV"];
		$Marca = $_POST["comboMarca"];
		$Anio = $_POST["comboAnio"];
		$Transmision = $_POST["comboTrans"];
		$Llanta = $_POST["comboLlanta"];
		$NRing = $_POST["comboRing"];
		$NMotor = $_POST["txtMotor"];
		$NChasis = $_POST["txtChasis"];
		$Combus = $_POST["comboCombustible"];
		$AceiteCa = $_POST["comboAceiteC"];
		$AceiteMo = $_POST["comboAceiteM"];
		$Respuesta = $this->model ->Regis_Vehiculo($CVehiculo, $TVehi, $Marca, $Anio, $Transmision, $Llanta, $NRing, $NMotor, $NChasis, $Combus, $AceiteCa, $AceiteMo);
		echo $Respuesta;

		echo "<script language=javascript>
		 alert('INGRESADO EXITOSAMENTE');
    	</script>";
    	redirect("/menuUsuario/menuUsuario","refresh");
	}

}