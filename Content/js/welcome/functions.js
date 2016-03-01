function frmInvitado(frm){
	var url = $(".txtHdUrl").val()+"/Welcome/ajax_login";
	console.log("la url es:",url);
	actualizarCatalogo(url,frm,function(data){
		console.log("la data es",data);
		var data = jQuery.parseJSON(data);
		if(data.estado){
			window.location = $(".txtHdUrl").val()+"/Welcome/principal";
		}
		else{
			alert("error");
		}
	})
}