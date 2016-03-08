<?php /**
* 
*/
class MenuUsuario extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function menuUsuario()
	{
		if(isset($_SESSION["usuario"])){
			$this->load->view("menuUsuario/menuUsuario.php");
		}else{
			redirect("/welcome/index","refresh");
		}		
	}
}