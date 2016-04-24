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
		$tipoAnuncio = $this ->model->ObtenerTipo();
		$data = array("tipoAnuncio" => $tipoAnuncio);
		 $this->load->view("PublicarAnuncio/PublicarAnuncio.php",$data);
	}

	public function GuardarAnuncio()
	{
		$TituloAnuncio = $_POST["TituloAnuncio"];
		$DescripAnuncio=$_POST["DescripAnuncio"];
		$TipoAnuncio=$_POST["TipoAnuncio"];
		$FInicio=$_POST["txtInicio"];
		$Ffin=$_POST["txtFin"];
		$URLAnuncio=$_POST["URLAnuncio"];
		$ruta=base_url("Content/ImgBDD");

		$nombre_imagen=basename($_FILES['SubirImagen']['name']);
		$rut=$ruta.'/'.$nombre_imagen;
		$imageFileType = pathinfo($rut,PATHINFO_EXTENSION); 
		$imagen_temp=getimagesize($_FILES['SubirImagen']['tmp_name']);
		$uploadfile = $_SERVER['DOCUMENT_ROOT'].$ruta;
		move_uploaded_file($imagen_temp,$uploadfile );
		
		
		$Respuesta = $this->model ->IngresarAnuncio($TituloAnuncio,$DescripAnuncio,$TipoAnuncio,$FInicio,$Ffin,$URLAnuncio,$rut);
		echo "<img src='$rut'>";
		echo "<script language=javascript>
		 alert('Anuncio Publicado Exitosamente');
    	</script>";
	}
}