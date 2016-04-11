<?php 
include_once(APPPATH.'controllers/PadreController.php');
class MenuUsuario extends CI_Controller
{

	
	function __construct()
	{
		parent::__construct();
		$this->load ->model('menuUsuario/menuUsuarioModel');
		$this->model = new menuUsuarioModel();
	}
	public function menuUsuario()
	{
		if(isset($_SESSION["usuario"])){
			$usuario = $_SESSION["usuario"];
			$nombres = $this ->model->getnombres($usuario->idUsuario);
			$apellidos = $this ->model->getapellidos($usuario->idUsuario);			
			$correo = $this ->model->getcorreoelectronico($usuario->idUsuario);
			$fechanac = $this ->model->getfechanac($usuario->idUsuario);
			$data = array("mnombres" => $nombres,"mapellidos"=>$apellidos,"mcorreo"=>$correo,"mfechanac"=>$fechanac);
			$this->load->view("menuUsuario/menuUsuario.php",$data);
		}else{
			redirect("/welcome/index","refresh");
		}

	}
}
