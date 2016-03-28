<?php 

class Componentes extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/componentes/index/ 
		public function index(){
			$this->load->view("componentes/index.php");

			}

		}
