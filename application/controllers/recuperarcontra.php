<?php 

class Recuperarcontra extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/Recuperarcontra/index/ 
		public function index(){
			$this->load->view("Recuperarcontra/index.php");

			}

		}
