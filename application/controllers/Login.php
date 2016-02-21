<?php 
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		// funciones php 
		$this->load->view("Login/index.php");
	}
}