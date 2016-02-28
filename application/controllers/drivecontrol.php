<?php /**
* 
*/
class drivecontrol extends CI_Controller
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