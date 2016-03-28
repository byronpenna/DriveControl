<?php 

class componentesmoto extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/componentesmoto/index/ 
		public function index(){
			$this->load->view("componentesmoto/index.php");

			}

		}