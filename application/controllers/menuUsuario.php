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
			$data = array('usuario' => $_SESSION["usuario"] );
			$this->load->view("menuUsuario/menuUsuario.php",$data);
		}else{
			redirect("/welcome/index","refresh");
		}		
	}
}