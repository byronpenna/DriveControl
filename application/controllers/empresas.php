<?php 

class Empresas extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/empresas/index/ 
		public function index(){
			$this->load->view("Empresas/index.php");

			}

		}