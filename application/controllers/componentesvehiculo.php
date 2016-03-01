<?php 

class componentes extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/componentesvehiculos/index/ 
		public function index(){
			$this->load->view("componentesvehiculos/index.php");

			}

		}
