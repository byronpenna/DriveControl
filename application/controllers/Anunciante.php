<?php 
include_once(APPPATH.'controllers/PadreController.php');
class Anunciante extends PadreController {
	// metodos 
		private $_model;
		function __construct(){
			parent::__construct();
			$this->load->model("Anunciante/AnuncianteModel");
			$this->_model = new AnuncianteModel();
		}
	// URL
		// agrega, eliminar
		// localhost://drivecontrol/index.php/anunciante/index/ 
		function index(){
			$this->load->view("Anunciante/index.php");
		}
		function registrar_anunciante(){
			$anunciantes 	= $this->_model->getAnunciantes();
			$usuarios 		= $this->_model->getUsuarios();
			$data = array(
				'anunciantes' 	=> $anunciantes,
				"usuarios" 		=> $usuarios);
			$this->load->view("Anunciante/registrar_anunciante.php",$data);
		}
		function eliminarAnunciante($idAnunciante){
			$estado = $this->_model->eliminarAnunciante($idAnunciante);
			if($estado){
				echo "<script language=javascript>
				 alert('Anunciante eliminado exitosamente');
		    	</script>";	
			}else{
				echo "<script language=javascript>
				 alert('Ocurrio un error');
		    	</script>";
			}
	    	redirect("/Anunciante/registrar_anunciante","refresh");
		}
		function guardarAnunciante(){
			$anunciante = new stdClass();
			$anunciante->anunciante = $_POST["txtNombreAnunciante"];
			$anunciante->idUsuario 	= $_POST["cbUsuario"];
			$estado = $this->_model->guardarAnunciante($anunciante);
			if($estado){
				echo "<script language=javascript>
				 alert('Anunciante asignado exitosamente');
		    	</script>";	
			}else{
				echo "<script language=javascript>
				 alert('Ocurrio un error');
		    	</script>";
			}
	    	redirect("/Anunciante/registrar_anunciante","refresh");
		}
		function veranuncio($id,$idUsuario=""){
			$data = array(
				'idAnuncio' => $id,
				'Nombre' => "Rocio"
				);
			$this->load->view("Anunciante/veranuncio.php",$data);
		}
}