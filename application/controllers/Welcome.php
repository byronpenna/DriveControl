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
			$this->load->view('welcome_message');
		}
		public function registro(){
			$this->load->view("welcome/registro.php");
		}
	// funciones ajax
		public function ajax_registrar(){
			$usuario = new stdClass();
			$frm = $this->getFormularioAjax();
			$retorno = new stdClass();
			$retorno->estado = $this->model->registrarUsuario($frm);
			echo json_encode($retorno);
		}
}
