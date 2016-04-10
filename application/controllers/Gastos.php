<?php 
include_once(APPPATH.'controllers/PadreController.php');
class Gastos extends PadreController
{
	function __construct()
	{
		parent::__construct();	
	}
	function index(){
		$this->load->view("Gastos/index.php");
	}
}