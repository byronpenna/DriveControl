<?php /**
* 
*/
class Drivecontrol extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function drivecontrol()
	{
		$this->load->view("drivecontrol/drivecontrol.php");
	}
}

// ANUNCIANTE -- NOMBRE -- NIT -- TELEFONO  
	// REGISTRAR ANUNCIOS 
	// ELIMINARLOS 
	// EDITARLO