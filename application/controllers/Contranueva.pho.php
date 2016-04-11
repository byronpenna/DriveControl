<?php 

class Contranueva extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/Contranueva/index/ 
		public function index(){
			$this->load->view("Contranueva/index.php");

			}

		}