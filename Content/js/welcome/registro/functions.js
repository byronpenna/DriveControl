function registrar(frm){
	var url = $(".txtHdUrl").val()+"Welcome/ajax_registrar";
	actualizarCatalogo(url,frm,function(data){
		if(data.estado){
			alert("Regitrado exitosamente");
		}else{
			alert("error");
		}

	});
}	