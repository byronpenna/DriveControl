<?php 
class PadreController extends CI_Controller
{
	// funciones magicas
		function __construct()
		{
			parent::__construct();
		}
	// metodos
		function getFormularioAjax(){
			$frm =json_decode($_POST["form"]);
			return $frm;
		}
}