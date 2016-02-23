function registrar(frm){
	var url = $(".txtHdUrl").val()+"/Welcome/ajax_registrar";
	console.log("url es",url);
	actualizarCatalogo(url,frm,function(data){
		console.log("la data es",data);
		var data = jQuery.parseJSON(data);
		if(data.estado){
			alert("Regitrado exitosamente");
		}else{
			alert("error");
		}
	});
}	