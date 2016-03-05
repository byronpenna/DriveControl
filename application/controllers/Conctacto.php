<?php /**
* 
*/
class Contacto extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function Contacto()
	{
		$this->load->view("Contacto/Contacto.php");
	}
}