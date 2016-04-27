<?php 

class empresas extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/empresas/index/ 
		public function index(){
			$this->load->view("empresas/index.php");

			}

		}