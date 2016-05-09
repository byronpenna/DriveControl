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
	//######
		public function email($obj){
			// the message
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= "From: Drivecontrol <info@ritsasv.com>\r\n";
			$headers .= "Reply-To: info@ritsasv.com\r\n";
			$headers .= "Return-path: info@ritsasv.com\r\n";

			$msg = "De: ".$obj->nombre." (".$obj->correo.") <br>
				telefono: ".$obj->telefono." <br>
				asunto: ".$obj->asunto." <br>
				Mensaje: ".$obj->mensaje." <br>
				";

			// use wordwrap() if lines are longer than 70 characters
			$msg = wordwrap($msg,70);
			$config = array(
				'protocol' 	=> "smtp",
				"smtp_host" => "mail.ritsasv.com",
				"smtp_port" => "26",
				"smtp_user" => "info@ritsasv.com",
				"smtp_pass" => "352538",
				"mailtype" 	=> "html",
				"charset" 	=> "iso-8859-1",
				"wordwrap" 	=> TRUE,
				 );
			$this->load->library('email', $config);
			$this->email->initialize($config); // Add 

			$this->email->from('info@ritsasv.com');
			$this->email->to("byronpenna@gmail.com");
			$this->email->subject('Sugerencia');
			$this->email->message($msg);
			// send email
			//mail($obj->email,"Confirme registro",$msg,$headers);
			if($this->email->send()) {
			  echo 'Mensaje enviado correctamente';    
			} else {
			  print_r($this->email->print_debugger());  
			}
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
			/*$correo->headers = 'From: '.$email_from."\r\n".
			'Reply-To: '.$email_from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			*/$this->email($correo);
			//mail($corre->correo,$correo->asunto,$corre->headers);
			/*if(isset($_POST["nombre"])){	
				//$nombre=
				$correo=
				$telfono=
				$asunto=
				$mensaje=
				$this->model->EnviarCorreo($nombre,$correo,$telefono,$asunto,$mensaje);
			}*/
			//print_r($correo);

			
		}
}
