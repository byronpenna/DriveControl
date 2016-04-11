<?php /**
* 
*/
class NuevaBusquedas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function NuevaBusqueda()
	{
		if(isset($_SESSION["usuario"])){
			$this->load->view("menuUsuario/NuevaBusqueda.php");
		}else{
			redirect("/welcome/index","refresh");
		}
	}
}