<?php 

class controlgastos extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/controlgastos/index/ 
		public function index(){
			$this->load->view("controlgastos/index.php");

			}

		}