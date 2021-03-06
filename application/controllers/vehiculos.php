<?php /**
* 
*/
ob_start();

defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/PadreController.php');
class Vehiculos extends PadreController {

	private $model;
	function __construct()
	{
		parent::__construct();
		$this->load ->model('vehiculos/VehiculosModel');
		$this->model = new VehiculosModel();
	}

	public function vehiculos()
	{
		if(isset($_SESSION["usuario"])){
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
		}else{
			redirect("/welcome/index","refresh");
		}		
	}

	public function Modificar_vehiculos($id)
	{
		if(isset($_SESSION["usuario"])){
		 //echo "El id es : ".$id ; 
			$vehiculo = $this->model->getDataVehiculoById($id);
			$marcas = $this ->model->IngresarMarca();
			$rines = $this ->model->IngresarRin();
			$ll = $this ->model->IngresarLlantas();
			$CVehiculo = $this ->model->IngresarClaseVehiculos();
			$TVehiculo = $this ->model->IngresarTipoVehiculo();
			$AceiteC = $this ->model->IngresarAceiteC();
			$AceiteM = $this ->model->IngresarAceiteM();
			$Trans = $this ->model->IngresarTransmision();
			$combustible = $this ->model->IngresarCombustible();
			$data = array("vehiculo" => $vehiculo[0],"marcas" => $marcas , "rines" => $rines, "ll" => $ll , "CVehiculo" => $CVehiculo ,"TVehiculo" => $TVehiculo, "AceiteC" => $AceiteC, "AceiteM" => $AceiteM, "Trans" => $Trans, "combustible" => $combustible, "id" => $id);
			$this ->load ->view('ModificarV/ModificarV.php',$data);
		}else{
			redirect("/welcome/index","refresh");
		}	
	}
	public function registrar_Vehiculo()
	{
		$modelo 		= $_POST["cbModelo"];
		if(isset($_SESSION["usuario"])){
			if($modelo != "-1"){
				$CVehiculo 		= $_POST["comboClaseV"];
				$TVehi 			= $_POST["comboTipoV"];
				$Marca 			= $_POST["comboMarca"];
				$Anio 			= $_POST["comboAnio"];
				$Transmision 	= $_POST["comboTrans"];
				$Llanta 		= $_POST["comboLlanta"];
				$NRing 			= $_POST["comboRing"];
				$NMotor 		= $_POST["txtMotor"];
				$NChasis 		= $_POST["txtChasis"];
				$Combus 		= $_POST["comboCombustible"];
				$AceiteCa 		= $_POST["comboAceiteC"];
				$AceiteMo 		= $_POST["comboAceiteM"];
				$usuario 		= $_SESSION["usuario"];
				
				$Respuesta = $this->model ->Regis_Vehiculo($CVehiculo, $TVehi, $modelo, $Anio, $Transmision, $Llanta, $NRing, $NMotor, $NChasis, $Combus, $AceiteCa, $AceiteMo,$usuario->idUsuario);
				echo $Respuesta;

				echo "<script language=javascript>
				 alert('INGRESADO EXITOSAMENTE');
		    	</script>";
		    	redirect("/MenuUsuario/menuUsuario","refresh");	
			}else{
				echo "Verifique haber llenado datos correctamente";
			}
			
	    }else{
			redirect("/welcome/index","refresh");
		}	
	}


	public function Modificar_Vehiculo($id)
	{
		if(isset($_SESSION["usuario"])){
			$modelo = $_POST["cbModelo"];
			if($modelo != -1){
				$CVehiculo = $_POST["comboClaseV"];
				$TVehi = $_POST["comboTipoV"];
				//$Marca = $_POST["comboMarca"];
				$Anio 			= $_POST["comboAnio"];
				$Transmision 	= $_POST["comboTrans"];
				$Llanta 		= $_POST["comboLlanta"];
				$NRing 			= $_POST["comboRing"];
				$NMotor 		= $_POST["txtMotor"];
				$NChasis 		= $_POST["txtChasis"];
				$Combus 		= $_POST["comboCombustible"];
				$AceiteCa 		= $_POST["comboAceiteC"];
				$AceiteMo 		= $_POST["comboAceiteM"];
				$usuario 		= $_SESSION["usuario"];
				$Respuesta = $this->model ->Modifi_Vehiculo($id, $CVehiculo, $TVehi, $modelo, $Anio, $Transmision, $Llanta, $NRing, $NMotor, $NChasis, $Combus, $AceiteCa, $AceiteMo,$usuario->idUsuario);
				echo $Respuesta;

				echo "<script language=javascript>
				 alert('MODIFICADO EXITOSAMENTE');
		    	</script>";
		    	redirect("/Vehiculos/Mostrar_Vehiculo","refresh");
			}else{
				echo "Asegurate de llenar correctamente los datos ";
			}
			
	    }else{
			redirect("/welcome/index","refresh");
		}
	}
	public function Mostrar_Vehiculo()
	{
		if(isset($_SESSION["usuario"])){
			//$usuario 	= $_SESSION["usuario"];
			$usuario = $this->session->userdata('usuario');
			$VerV = $this ->model->VerVehiculo($usuario->idUsuario);
			$data = array("VerV" => $VerV);
			//$data = array('usuario' => $usuario );
			$this ->load ->view('InfoVehiculos/InfoVehiculos.php',$data);
		}else{
			redirect("/welcome/index","refresh");
		}
	}
	// ajax

	public function Eliminar_Vehiculo($id)
	{
		if(isset($_SESSION["usuario"])){
			$usuario 	= $_SESSION["usuario"];
			$Respuesta = $this->model ->EliminarVehiculo($id,$usuario->idUsuario);
			echo $Respuesta;

			echo "<script language=javascript>
			 alert('ELIMINADO EXITOSAMENTE');
	    	</script>";
	    	redirect("/MenuUsuario/menuUsuario","refresh");
		}else{
			redirect("/welcome/index","refresh");
		}
	}
	public function ajax_getModelosFromMarca(){
		$frm 	= $this->getFormularioAjax();
		$modelos = $this->model->getModelosFromMarca($frm->idMarca);
		$retorno = new stdClass();
		$retorno->estado = true;
		$retorno->modelos = $modelos;
		echo json_encode($retorno);

	}

}