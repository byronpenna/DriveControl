<?php 
include_once(APPPATH.'controllers/PadreController.php');
class Gastos extends PadreController
{
	function __construct()
	{
		parent::__construct();	
		$this->load ->model('Gastos/GastosModel');
		$this->_model = new GastosModel();
	}
	function index(){
		if(isset($_SESSION["usuario"])){
			$usuario 	= $_SESSION["usuario"];
			$vehiculos 	= $this->_model->getVehiculosGastos($usuario->idUsuario);
			$data = array(
						'vehiculos' => $vehiculos,
						"repuestos" => $this->_model->getRepuestos());
			$this->load->view("Gastos/index.php",$data);
		}else{
			redirect("/welcome/index","refresh");
		}	
	}

	// acciones ajax
	function ajax_ingresarGasto(){
		if(isset($_SESSION["usuario"])){
			$frm 		= $this->getFormularioAjax();
			$usuario 	= $_SESSION["usuario"];
			$retorno = new stdClass();
			$retorno->estado = $this->_model->agregarGasto($frm);
			echo json_encode($retorno);
		}else{
			$retorno = new stdClass();
			$retorno->login = false; // hacer en javascript algo para mandar a pantalla login			
			echo json_encode($retorno);
		}
	}
	function ajax_obtenerGastos(){
		if(isset($_SESSION["usuario"])){
			$frm 		= $this->getFormularioAjax();
			$usuario 	= $_SESSION["usuario"];
			$retorno 	= $this->_model->obtenerGastos($frm->idVehiculo,$usuario->idUsuario);
			$retorno->estado = true;
			echo json_encode($retorno);
		}else{
			$retorno = new stdClass();
			$retorno->login = false; // hacer en javascript algo para mandar a pantalla login
		}
	}
}