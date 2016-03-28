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
		$this->load ->model('menuUsuario/usuarioModel.php');
		$this ->model = new controlModel();
	}
	public function menuUsuario()
	{

		$nombres = $this ->model->MostrarNombre();
		$apellido = $this ->model->MostrarApellido();
		$fecha = $this ->model->MostrarFecha();
		$correo = $this ->model->MostrarCorreo();

		$data = array("nombres" => $nombres ,"apellido" => $apellido , "fecha" => $fecha , "correo" => $correo);


		$this->load->view("menuUsuario/menuUsuario.php",$data);
	}
}