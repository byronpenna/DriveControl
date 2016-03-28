<?php 

class componentescarro extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/componentescarro/index/ 
		public function index(){
			$this->load->view("componentescarro/index.php");

			}

		}