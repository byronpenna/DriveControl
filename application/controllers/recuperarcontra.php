<?php 

class recuperarcontra extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/recuperarcontra/index/ 
		public function index(){
			$this->load->view("recuperarcontra/index.php");

			}

		}
