<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/PadreController.php');
class Conctactos extends PadreController
{
	
private $model;
function __construct(){
			parent::__construct();
			$this->load->model("Contactos/contactosModel");
			$this->model = new ContactosModel();	
		}
	// funciones vistas 
		public function contacto()
		{
			$this->load->view("Contactox/Contacto.php");
			
		}
	// funciones de acciones 
		public function enviarCorreo(){
			$correo = new stdClass();
			$correo->nombre		=$_POST["nombre"];
			$correo->correo 	= $_POST["correo"];
			$correo->telefono 	=$_POST["telefono"];
			$correo->asunto 	= $_POST["asunto"];
			$correo->mensaje 	= $_POST["mensaje"];
			$correo->imagen 	= "";
			$correo->headers = 'From: '.$email_from."\r\n".
			'Reply-To: '.$email_from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			$this->model->EnviarCorreo($correo);
			mail($corre->correo,$correo->asunto,$corre->headers);
			/*if(isset($_POST["nombre"])){	
				//$nombre=
				$correo=
				$telfono=
				$asunto=
				$mensaje=
				$this->model->EnviarCorreo($nombre,$correo,$telefono,$asunto,$mensaje);
			}*/
			print_r($correo);

			
		}
}
