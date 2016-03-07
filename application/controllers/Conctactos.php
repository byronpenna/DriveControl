<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/PadreController.php');
class Conctactos extends PadreController
{
	
private $model;
function __construct(){
			parent::__construct();
			$this->load->model("Contactos/contactosModel");
			$this->model = new contactosModel();	
		}
	public function contacto()
	{
		$this->load->view("Contactox/Contacto.php");
		if(isset($_POST["nombre"])){	
		$nombre=$_POST["nombre"];
		$correo=$_POST["correo"];
		$telfono=$_POST["telefono"];
		$asunto=$_POST["asunto"];
		$mensaje=$_POST["mensaje"];
		$this->model->EnviarCorreo($nombre,$correo,$telefono,$asunto,$mensaje);
	}
	}
}
