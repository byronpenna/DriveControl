<?php 

class Suscripcion extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/Suscripcion/index/ 
		public function index(){
			$this->load->view("Suscripcion/index.php");

			}

		}
