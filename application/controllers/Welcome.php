<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/PadreController.php');
class Welcome extends PadreController {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// propiedades 
		private $model;
	// funciones magicas
		function __construct(){
			parent::__construct();
			$this->load->model("welcome/WelcomeModel");
			$this->model = new WelcomeModel();	
		}
		
	// url 
		public function index()
		{
			$this->load->view("Login/index.php");
			//$this->load->view('welcome_message');
		}
		public function registro(){
			$this->load->view("welcome/registro.php");
		}
		public function principal(){
			if(isset($_SESSION["usuario"])){
				//print_r($_SESSION);
				$this->load->view("welcome/principal.php");	
			}else{
				redirect("/welcome/index","refresh");
			}		
		}
		public function cerrarSession(){
			//session_destroy();
			$this->session->sess_destroy();
			$this->session->unset_userdata("usuario");
			redirect("/welcome/principal","refresh");
		}
	// funciones ajax
		public function ajax_login(){
			$frm 		= $this->getFormularioAjax();
			$respuesta 	= $this->model->loguear($frm);
			//if(!isset($_SESSION)) {
			    @session_start();
			//}
			//$_SESSION["usuario"] = "hola";//$respuesta->usuario;
			$this->session->set_userdata("usuario",$respuesta->usuario);
			//echo "asigno el usuario";
			//echo json_encode($_SESSION);
			echo json_encode($respuesta);
		}
		public function ajax_registrar(){
			$usuario = new stdClass();
			$frm = $this->getFormularioAjax();
			$retorno = new stdClass();
			$retorno->estado = $this->model->registrarUsuario($frm);
			echo json_encode($retorno);
		}
}
