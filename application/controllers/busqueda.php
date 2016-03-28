<?php 

class Busqueda extends CI_Controller {
	// metodos 
		function __construct()
		{
			parent::__construct();
		}
		// URL
		// localhost://drivecontrol/index.php/Busqueda/index/ 
		public function index(){
			$this->load->view("Busqueda/index.php");

			}

}

		