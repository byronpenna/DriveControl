<?php 

class noticias extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/noticias/index/ 
		public function index(){
			$this->load->view("noticias/index.php");

			}

		}