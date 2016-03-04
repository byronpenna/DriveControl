<?php 

class contactenos extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/contactenos/index/ 
		public function index(){
			$this->load->view("contactenos/index.php");

			}

		}
