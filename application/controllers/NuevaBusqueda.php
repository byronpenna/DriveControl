<?php /**
* 
*/
class NuevaBusqueda extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function NuevaBusquedas()
	{
		$this->load->view("menuUsuario/NuevaBusqueda.php");
		
	}
}