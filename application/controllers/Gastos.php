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
			$usuario = $_SESSION["usuario"];
			$vehiculos = $this->_model->getVehiculosGastos($usuario->idUsuario);
			$data = array('vehiculos' => $vehiculos );
			$this->load->view("Gastos/index.php",$data);
		}else{
			redirect("/welcome/index","refresh");
		}	
	}
}