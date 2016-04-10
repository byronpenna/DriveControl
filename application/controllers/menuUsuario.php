<?php /**
* 
*/
class menuUsuario extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function menuUsuario()
	{
		$this->load->view("menuUsuario/menuUsuario.php");
		
	}
}