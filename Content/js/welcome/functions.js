function frmInvitado(frm){
	var url = $(".txtHdUrl").val()+"/Welcome/ajax_login";
	console.log("la url es:",url);
	actualizarCatalogo(url,frm,function(data){
		console.log("la data es",data);
		var data = jQuery.parseJSON(data);
		if(data.estado){
			window.location = $(".txtHdUrl").val()+"/menuUsuario/menuUsuario";
		}
		else{
			//alert("error");
			printMessage($(".mensajesLogin"),data.error.mensaje);
		}
		/*$(".btnRegistro").prop("disabled",true);
		$(".divLoading").empty().append("<img src='"+$(".txtHdBaseUrl").val()+"/img/gifload.gif"+"'>");
		*/
	})
}