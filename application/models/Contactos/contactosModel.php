<?php 
class contactosModel extends CI_Model
{
	function __construct()
	{

	}

public function EnviarCorreo($nombre,$correo,$telefono,$asunto,$mensaje)
{
	if(mail('edekurt90@gmail.com','prueba',$mensaje))
	{
		echo "envio conexito";
	}
	else{
		echo "no se envio";
	}
	
}
}