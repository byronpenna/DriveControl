<?php /**
* 
*/
class vehiculos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function vehiculos()
	{
		$this->load->view("vehiculos/vehiculos.php");
	}
}