<?php 

class resena extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/resena/index/ 
		public function index(){
			$this->load->view("resena/index.php");

			}

		}