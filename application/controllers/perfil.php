<?php 

class perfil extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/perfil/index/ 
		public function index(){
			$this->load->view("perfil/index.php");

			}

		}