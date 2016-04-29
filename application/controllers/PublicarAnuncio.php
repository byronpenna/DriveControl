<?php /**
* 
*/

include_once(APPPATH.'controllers/PadreController.php');
class PublicarAnuncio extends PadreController {
private $model;
	function __construct()
	{
		parent::__construct();
		$this->load ->model('PuclicarAnuncio/AnuncioModel');
		$this->model = new AnuncioModel();
	}


	public function Publicar_Anuncio()
	{ 
		if(isset($_SESSION["usuario"])){
		$tipoAnuncio = $this ->model->ObtenerTipo();
		$data = array("tipoAnuncio" => $tipoAnuncio);
		 $this->load->view("PublicarAnuncio/PublicarAnuncio.php",$data);
		}
			else{
			redirect("/welcome/index","refresh");
		}
	}

	public function GuardarAnuncio()
	{
		$TituloAnuncio 	= $_POST["TituloAnuncio"];
		$DescripAnuncio = $_POST["DescripAnuncio"];
		$TipoAnuncio 	= $_POST["TipoAnuncio"];
		$FInicio 		= $_POST["txtInicio"];
		$Ffin			= $_POST["txtFin"];
		$URLAnuncio		= $_POST["URLAnuncio"];
		$usuario 	= $_SESSION["usuario"];
		$ruta 			= base_url("Content/ImgBDD");

		$nombre_imagen=basename($_FILES['SubirImagen']['name']);
		$rut=$ruta.'/'.$nombre_imagen;
		$imageFileType = pathinfo($rut,PATHINFO_EXTENSION); 
		//$imagen_temp=	/*getimagesize(*/$_FILES['SubirImagen']['tmp_name'];//);
		$uploadfile = $_SERVER['DOCUMENT_ROOT']."/drivecontrol/Content/ImgBDD/";//.$nombre_imagen;
		$idAnunciant=$this->model ->Select_anunciante($usuario->idUsuario);
		$Respuesta = $this->model ->IngresarAnuncio($TituloAnuncio,$DescripAnuncio,$TipoAnuncio,$FInicio,$Ffin,$URLAnuncio,$rut,$idAnunciant[0]->idAnunciante);
		if($Respuesta->estado){
			$uploadfile .= $Respuesta->idInsert.".".$imageFileType;
			move_uploaded_file($_FILES['SubirImagen']['tmp_name'],$uploadfile );	
		}else{
			echo "ocurrio un error";
		}
		//echo "<img src='$rut'>";
		echo "<script language=javascript>
		 alert('Anuncio Publicado Exitosamente');
    	</script>";
    	redirect("/PublicarAnuncio/Publicar_Anuncio","refresh");
	}
}

